<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.knowledge');
    }

   public function store(StorePostRequest $request)
   {
    $input = $request->validated();
    Post::create($input);
    return redirect()->route('create-post');
   }

   public function create()
   {
        $categories = Category::all();

       return view('dashboard.create-post',
       ['categories' => $categories]);
   }

   public function delete()
   {

   }

}
