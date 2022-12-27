<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $id = 'id';
    public $fillable = ['category_id','name','description','price', 'image'];
}
