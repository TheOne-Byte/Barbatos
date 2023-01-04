<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function product_detail($id){
        $categories = Category::all();
        $products = Product::find($id);
        return view('ProductDetail', ['products' => $products, 'categories' => $categories]);
    }

    public function cart(Request $req, $id){
        $req->validate([
            'quantity' => 'required|numeric|min:1'
        ]);
        $product = Product::find($id);
        $transaction = new Transaction();
        $transaction->product_id = $id;
        $transaction->quantity = $req->quantity;
        $transaction->sub_price = $req->quantity * $product->price;
        $transaction->save();

        return redirect('Homepage');
    }

    public function CategoryDetailPage($id){
        $categories = Category::all();
        $products = Product::find($id);
        $Viewcategories = $products->Categoryrelation;
        return view('ProductbyCategory',['products' => $products, 'view' => $Viewcategories,'categories' => $categories]);
    }
    public function ManageProduct(){
        $product = Product::all();
        $categories = Category::all();
        return view('ManageProduct',['product'=>$product, 'categories' => $categories]);
    }
    public function getProduct(Request $req){
        $categories = Category::all();
        return view('AddProduct', ['categories' => $categories]);
    }
    public function AddProduct(Request $req){
        $categories = Category::all();
        $req->validate([
            'name'=>'required',
            'category'=>'required',
            'detail'=>'required',
            'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,png,jpeg'
        ]);
        $add = new Product;
        $add->name = $req->name;
        $add->category_id = $req->category;
        $add->description = $req->detail;
        $add->price = $req -> price;

        $file_image = $req->file('image');
        $imgname = $file_image->getClientOriginalName();
        $imagefile = '/BarbatosImage/'.$imgname;
        $add->image = $imagefile;
        $add->save();
        return Redirect::to('/ManageProduct', ['categories' => $categories]);
    }
    public function getUpdate(Request $req, $id){
        $categories = Category::all();
        $products_details = Product::find($id); 
        return view('UpdateProduct', ['products' => $products_details ,'categories' => $categories]);
    }
    public function UpdateProduct(Request $req, $id){
        $categories = Category::all();
        $req->validate([
            'name'=>'required',
            'category'=>'required',
            'detail'=>'required',
            'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,png,jpeg'
        ]);
        $edit = Product::find($id);
        $edit->name = $req->name;
        $edit->category_id = $req->category;
        $edit->description = $req->detail;
        $edit->price = $req->price;

        $file_image = $req->file('image');
        $imgname = $file_image->getClientOriginalName();
        $imagefile = '/BarbatosImage/'.$imgname;
        $edit->image = $imagefile;
        $edit->save();

        return redirect()->route('ManageProduct', ['categories' => $categories]);
    }
    public function DeleteProduct($index){
        $product = Product::find($index);
        $product->delete();
        return Redirect::to('/ManageProduct');
    }

}
