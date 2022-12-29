<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_detail($index ){
       $category = Category::all();
       $product = Product::find($index);
       return view('ProductDetail', compact('Category', 'product'));
    }


}
