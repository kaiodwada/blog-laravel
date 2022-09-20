<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 0)->paginate(10);
        return view('dashboard.posts', [
            'posts' => $posts,
        ]);
    }

    public function store(StorePostRequest $request)
    {
        $input = $request->validated();
        Post::create($input);
        return redirect()->route('post-create');
    }

    public function published()
    {
        $posts = Post::where('status', 1)->paginate(10);
        return view('dashboard.published-posts', [
            'posts' => $posts,
        ]);
    }

    public function edit(Post $post)
    {
        return view('dashboard.post-edit', [
            'post' => $post,
        ]);
    }

    public function update()
    {
    }

    public function create()
    {
        $categories = Category::all();

        return view(
            'dashboard.create-post',
            ['categories' => $categories]
        );
    }

    public function delete()
    {
    }
}
