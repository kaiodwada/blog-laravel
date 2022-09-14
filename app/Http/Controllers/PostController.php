<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewPost()
    {
        return view('view-post');
    }

   public function store(Request $request)
   {
    $input = $request;
    dd($input);
   }

   public function createPost()
   {
       return view('dashboard.create-post');
   }

   public function knowledge()
   {
       return view('dashboard.knowledge');
   }
}
