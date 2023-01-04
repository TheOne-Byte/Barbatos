<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function ShoppingCart(){
        $cart = Transaction::all();
        
        $total_price = 0;
        foreach($cart as $cart){
            $total_price += $cart->sub_price;
        }
        return view('CartPage', compact('cart', 'total_price'));
    }

    public function delete($id)
    {
        $data = Transaction::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function history(){
        $transactions = Transaction::all();
        $total_price = 0;
        $total_quantity = 0;
        foreach ($transactions as $transaction) {
            foreach ($transactions as $cart) {
                $total_price += $cart->sub_price;
                $total_quantity += $cart->quantity;
            }
        }

        return view('History', compact('total_price', 'transactions', 'total_quantity'));
    }
}
