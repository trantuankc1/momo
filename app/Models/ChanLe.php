<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChanLe extends Model
{
    use HasFactory;

    protected $table = 'chan_les';

    protected $fillable = [
        'price_min',
        'price_max',
        'tile'
    ];
}
