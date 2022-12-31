<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product_detail(){
        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        return view('ProductDetail', ['products' => $products, 'categories' => $categories]);
    }


}
