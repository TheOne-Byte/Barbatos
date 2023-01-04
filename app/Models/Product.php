<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $id = 'id';
    public $fillable = [
        'category_id',
        'name',
        'description',
        'price', 
        'image',
    ];
    public function Categoryrelation(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function Transactionrelation(){
        return $this->belongsTo(Transaction::class);
    }
    
    public $timestamps = false;
}


