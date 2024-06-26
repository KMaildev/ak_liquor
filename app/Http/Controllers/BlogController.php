<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function show($id)
    {
        $blogs = Blog::all();
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blogs', 'blog'));
    }
}
