<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($index){
        $categories = Category::all();
        $categoryName =Category::find($index);
        $category = Product::find($index)->where('category_id','=',$index)->leftjoin('categories','products.category_id','=','categories.id')->get();

        return view('ProductbyCategory',['category'=>$category,'categoryName'=>$categoryName, 'categories' => $categories]);
    }

}
