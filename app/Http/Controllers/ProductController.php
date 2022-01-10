<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->secret_code = $request->secret_code;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('products.index');
    }
    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->secret_code = $request->secret_code;
        $product->status = $request->status;
        $product->update();
        return redirect()->route('products.index');
    }
    public function delete($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
