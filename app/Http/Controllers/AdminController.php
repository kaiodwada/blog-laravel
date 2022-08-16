<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function categories()
    {
        return view('dashboard.categories');
    }

    public function storeCategory(Request $request)
    {
        $input = ['name' => 'teste3', 'status' => '1'];

       Category::create($input);

      return redirect()->route('categories');
    }

    public function createPost()
    {
        return view('dashboard.create-post');
    }

    public function knowledge()
    {
        return view('dashboard.knowledge');
    }

    public function createEditor()
    {
        return view('dashboard.create-editors');
    }

    public function editors()
    {
        return view('dashboard.editors');
    }
}
