<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'unit_id'];

    public function productDetail()
    {
        // Define a one-to-one relationship with ProductDetail
        // The product detail belongs to a product
        // Product has a product detail.
        return $this->hasOne('App\Models\ProductDetail');
    }
}
