<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function result()
    {
        // dd(Products::all());
        return view('goods/catalog', ['products' => Product::all()]);
    }
}
