<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotPhanBa extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_min',
        'price_max',
        'tile'
    ];

    protected $table = 'mot_phan_bas';
}
