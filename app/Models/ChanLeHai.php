<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChanLeHai extends Model
{
    use HasFactory;

    protected $table = 'chan_le_hais';

    protected $fillable = [
        'price_min',
        'price_max',
        'tile',
    ];
}
