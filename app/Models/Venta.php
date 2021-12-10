<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'expiration',
        'stock',
        'weightKg',
        'imgLink'
    ];
}
