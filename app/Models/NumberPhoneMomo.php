<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberPhoneMomo extends Model
{
    use HasFactory;

    protected $fillable = [
      'sdt', 'status','soluot'
    ];

    protected $table = 'number_phone_momos';

    public function chanle()
    {
        return $this->hasMany(ChanLe::class, 'id', 'id');
    }
}
