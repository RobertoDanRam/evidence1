<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['invoice_number', 'material_stock_id', 'quantity_ordered', 'unit_price', 'discount', 'subtotal'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'invoice_number', 'invoice_number');
    }

    public function materialStock()
    {
        return $this->belongsTo(MaterialStock::class);
    }
}