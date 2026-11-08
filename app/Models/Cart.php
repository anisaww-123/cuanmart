<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Pastikan nama tabelnya didefinisikan secara eksplisit
    protected $table = 'carts';

    protected $fillable = [
        'product_id',
        'quantity',
    ];
}