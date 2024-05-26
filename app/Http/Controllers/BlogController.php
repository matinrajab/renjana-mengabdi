<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('id')->get();
        return view('user.blog.blogs', ['blogs' => $blogs]);
    }

    public function show(Blog $blog)
    {
        return view('user.blog.blog-details', compact('blog'));
    }
}
