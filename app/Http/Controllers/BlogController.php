<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::getRecords();
        return view('front.blogs', [
            'blogs' => $blogs
        ]);
    }

    public function blogView($slug)
    {
        $blog = Blog::findBySlug($slug);
        $blogs = Blog::recentBlogs();
        return view('front.blog-view', [
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }
}
