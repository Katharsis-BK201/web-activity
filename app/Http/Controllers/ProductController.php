<?php

namespace App\Http\Controllers;
use App\Models\ProducModelt;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();  // Get all products from the database
        return view('products.list', compact('products'));  // Return the view with the products
    }
}
