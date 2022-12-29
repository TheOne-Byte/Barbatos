<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_detail($id ){
       $categories = Category::all();
       $product = Product::find($id);
       return view('ProductDetail', compact('Category', 'product'));
    }


}
