<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
        public function product_detail($id){
            $products = Product::find($id);
            $categories = $products->Categoryrelation;
            return view('Homepage', ['products' => $products, 'categories' => $categories]);
    }

}
