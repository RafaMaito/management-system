<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'unit_id', 'supplier_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_orders')->withPivot('created_at');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}