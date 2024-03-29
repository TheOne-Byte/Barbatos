<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $id = 'id';
    public $fillable = ['name'];

    public function Productrelation(){
        return $this->hasMany(Product::class);
    }
}
