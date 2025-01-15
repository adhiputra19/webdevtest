<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription',
        'price',
        'date',
        'frequency',
        'payment_method',
        'note',
    ];
}