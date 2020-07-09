<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show(Product $customer)
    {
        return $customer;
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
    public function update(Request $request, Product $article)
    {

        $article->update($request->all());
        return response()->json($article, 200);
    }
    public function delete(Request $request, Product$article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
