<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_name',
        'phone',
        'quantity',
        'total_price',
    ];

    // Relasi ke tabel Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}