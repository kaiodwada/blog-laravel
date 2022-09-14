<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {

        $categories = Category::paginate(5);
        return view('dashboard.categories', [
            'categories' => $categories
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
        $input = $request->validated();
        Category::create($input);
        return redirect()->route('categories');
    }
}
