<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductTestingController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('/voyager/gravy', compact('products'));
    }
}