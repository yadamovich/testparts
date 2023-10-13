<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $products = Product::query()
            ->orderBy("created_at", "DESC")->limit(6)->get();

        return view('home', [
            "products" => $products,
        ]);
    }
}
