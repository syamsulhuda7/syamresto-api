<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->get();
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {
        $product->load(['category'])->get();
        return new ProductResource($product);
    }
}
