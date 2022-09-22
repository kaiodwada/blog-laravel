<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }
    public function login()
    {
        return view('login');
    }

}
