<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function homepage()
    {  $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);
    }
}