<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($index){
        $category = Category::all($index);
        
        return view('Homepage',['category'=>$category]);
    }
}
