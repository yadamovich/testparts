<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("created_at", "DESC")->paginate(3);

        return view('products.index', [
            "products" => $products,
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', [
            "product" => $product,
        ]);
    }
}
