<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiXiuHai extends Model
{
    use HasFactory;

    protected $table = 'tai_xiu_hais';

    protected $fillable= [
        'price_min',
        'price_max',
        'tile',
    ];
}
