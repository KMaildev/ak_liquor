<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Liquor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $liquors = Liquor::all();
        $blogs = Blog::all();
        return view('welcome', compact('liquors', 'blogs'));
    }
}
