<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function catergory($index){
        $categoryName =Category::find($index);
        $category = Product::find($index)->where('category_id','=',$index)->leftjoin('products','products.category_id','=','categories.category_id')->get();

        return view('ProductbyCategory',['category'=>$category,'categoryName'=>$categoryName]);
    }

    public function dropdownCategory($index){
        $categoryName =Category::get($index);

        return view('AddProduct',['categoryName'=>$categoryName]);
    }



}
