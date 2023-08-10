<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayQR extends Model
{
    use HasFactory;

    protected $table = 'pay_q_r_s';

    protected $fillable = [
        'image_qr',
        'sdt'
    ];
}
