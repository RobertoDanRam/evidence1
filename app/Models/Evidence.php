<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable = [
        'invoice_number', 'uploaded_by_user_id', 'photo_url', 
        'phase_type', 'latitude', 'longitude', 'captured_at'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'invoice_number', 'invoice_number');
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by_user_id');
    }
}