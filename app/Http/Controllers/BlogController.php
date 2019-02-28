<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = post::with('author')->latest()->paginate(3);
        return view('blog.index', compact('posts'));
    }
}
