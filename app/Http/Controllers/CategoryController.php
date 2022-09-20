<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('dashboard.categories', [
            'categories' => $categories,
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
        $input = $request->validated();
        Category::create($input);
        return redirect()->route('categories');
    }

    public function changeStatus(Category $category,StoreCategoryRequest $request)
    {
        $input = $request->validated();

        if ($input['status'] == 0) {
            $input['status'] = 1;

        }else{
            $input['status'] = 0;
        }
        $category->fill($input);
        $category->update();
        return redirect()->route('categories');
    }
}
