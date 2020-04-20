<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductTestingController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $id = auth()-id;
        return view('/voyager/gravy', compact('products', 'id'));
    }
}
