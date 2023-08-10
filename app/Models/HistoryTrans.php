<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTrans extends Model
{
    use HasFactory;

    protected $table = 'history_trans';

    protected $fillable = [
        'game',
        'tran_id',
        'status',
        'note',
        'price'
    ];
}
