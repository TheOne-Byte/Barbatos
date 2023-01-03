<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function product_detail(){
        $products = Product::all();
        return view('Homepage', ['products' => $products]);
    }

}
