<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return CategoryResource::collection($categories);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }
}
