<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductTestingController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $id = Auth::user()->id;
        return view('/voyager/gravy', compact('products', 'id'));
    }
}
