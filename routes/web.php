<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
 
    return "Cache cleared successfully";
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/{slug}',[HomeController::class,'page'])->name('home.page');
Route::post('/contact-email',[HomeController::class,'sendContactEmail'])->name('home.sendContactEmail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth:admin'],'prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //pages
    Route::get('/pages',[PageController::class,'index'])->name('page.index');
    Route::get('/page/create',[PageController::class,'create'])->name('page.create');
    Route::post('/page/store',[PageController::class,'store'])->name('page.store');
    Route::get('/page/{id}/edit',[PageController::class,'edit'])->name('page.edit');
    Route::put('/page/{id}',[PageController::class,'update'])->name('page.update');
    Route::delete('/page/{id}',[PageController::class,'destroy'])->name('page.delete');

    Route::get('/getSlug',function(Request $request){
        $slug = '';
        if(!empty($request->title)){
            $slug = Str::slug($request->title);
        }
        
        return response()->json([
            'status'=>true,
            'slug'=>$slug,
        ]);
    })->name('getSlug');
});


require __DIR__.'/adminauth.php';
