<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
   
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        $featured = DB::table('posts')->orderBy('id', 'desc')->where('is_featured', true)->limit(3)->get();
        return view('pages.index')->with('posts', $posts)->with('featured', $featured);
    }

    public function about(){
        return view('pages.about');
    }
}
