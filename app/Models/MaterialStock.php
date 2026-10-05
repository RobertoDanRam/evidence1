<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialStock extends Model
{
    protected $fillable = [
        'sku', 'name', 'unit_of_measure', 'weight_per_unit', 
        'location_aisle', 'available_quantity', 'minimum_stock_level', 'unit_price'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}