<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UploadImageController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

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

Route::get('/admin', function () {
    return redirect('/admin/login');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');

    return "Cache cleared successfully";
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Route::get('/{slug}', [HomeController::class, 'page'])->name('home.page');
Route::post('/contact-email', [HomeController::class, 'sendContactEmail'])->name('home.sendContactEmail');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('home.about');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('home.contact');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');

Route::get('/blogs', [BlogController::class, 'blogs'])->name('home.blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'blogView'])->name('home.blogs.view');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //pages
    Route::get('/pages', [PageController::class, 'index'])->name('page.index');
    Route::get('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::post('/page/store', [PageController::class, 'store'])->name('page.store');
    Route::get('/page/{id}/edit', [PageController::class, 'edit'])->name('page.edit');
    Route::put('/page/{id}', [PageController::class, 'update'])->name('page.update');
    Route::delete('/page/{id}', [PageController::class, 'destroy'])->name('page.delete');

    //blogs
    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [AdminBlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [AdminBlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [AdminBlogController::class, 'destroy'])->name('blog.delete');

    Route::post('/upload-image', [UploadImageController::class, 'create'])->name('media.create');

    Route::get('/getSlug', function (Request $request) {
        $slug = '';
        if (!empty($request->title)) {
            $slug = Str::slug($request->title);
        }

        return response()->json([
            'status' => true,
            'slug' => $slug,
        ]);
    })->name('getSlug');
});


require __DIR__ . '/adminauth.php';
