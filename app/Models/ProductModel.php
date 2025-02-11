<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';  // Set the table name
    protected $fillable = ['name', 'price', 'quantity'];  // Set the fillable fields
}
