<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; // No olvides importar esto arriba

class Order extends Model
{
    use SoftDeletes; // Activa el borrado lógico

    protected $primaryKey = 'invoice_number';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'invoice_number', 'customer_number', 'created_by_user_id', 'order_date', 
        'estimated_delivery_date', 'shipping_address', 'notes', 'subtotal', 
        'tax_amount', 'total_amount', 'current_status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_number', 'customer_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'invoice_number', 'invoice_number');
    }

    public function evidence()
    {
        return $this->hasMany(Evidence::class, 'invoice_number', 'invoice_number');
    }
}