<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }
    public function show(Customer $customer)
    {
        return $customer;
    }
    public function store(Request $request)
    {
        $article = Customer::create($request->all());
        return response()->json($article, 201);
    }
    public function update(Request $request, Customer $article)
    {

        $article->update($request->all());
        return response()->json($article, 200);
    }
    public function delete(Request $request, Customer $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
