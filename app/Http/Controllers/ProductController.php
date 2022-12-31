<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
<<<<<<< HEAD
    public function product_detail(){
        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        return view('ProductDetail', ['products' => $products, 'categories' => $categories]);
=======
    public function product_detail($index ){
       $category = Category::all();
       $product = Product::find($index);
       return view('ProductDetail', compact('Category', 'product'));
>>>>>>> 36cf007ef4f166f556170eb43457e532a72e0222
    }


}
