<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('title', 'desc')->get();
        return view('pages.index')->with('posts', $posts);
    }

    public function about(){
        return view('pages.about');
    }
}
