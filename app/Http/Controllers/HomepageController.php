<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('Homepage', ['categories' => $categories]);
    }
    public function search(Request $req){
        $req->validate([
            'search' => 'required',
        ]);
        $categories = Category::all();
        $products = Product::where('name', 'like', '%' . $req->search . '%')->paginate(10)->withQueryString();
        return view('Search', compact('categories', 'products'));
    }
    public function searchPage(Request $req){
        $categories = Category::all();
        $products = Product::where('name', 'like', '%' . $req->search . '%')->paginate(10)->withQueryString();
        return view('Search', compact('categories', 'products'));
    }
}
