<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $key = 'id';
    public $fillable = ['product_id','quantity', 'sub_price'];

    public function product(){
        return $this->hasOne(Product::class,'product_id');
    }
    public $timestamps = false;
}
