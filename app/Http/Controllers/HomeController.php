<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Admin;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function page($slug)
    // {
    //     $page = Page::where([
    //         'is_active' => 1,
    //         'is_deleted' => 0,
    //         'slug' => $slug
    //     ])->first();

    //     if ($page == null) {
    //         abort(404);
    //     }

    //     return view('front.page', [
    //         'page' => $page
    //     ]);
    // }

    public function sendContactEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:10',
        ]);

        if ($validator->passes()) {
            $mailData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            $admin = Admin::first();

            Mail::to($admin->email)->send(new ContactEmail($mailData));

            session()->flash('success', 'Thanks for contact with us, we will get back to you soon.');
            return response()->json([
                'status' => true,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }

    public function contactUs()
    {
        return view('front.contact-us');
    }

    public function blogs()
    {
        return view('front.blogs');
    }

    public function services()
    {
        return view('front.services');
    }
}
