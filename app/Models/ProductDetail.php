<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['product_id', 'length', 'height', 'width', 'unit_id'];

    // Define a one-to-one relationship with Product
    // The product detail belongs to a product
    // Product has a product detail.
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}