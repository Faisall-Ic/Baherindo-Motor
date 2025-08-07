<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotorOsis extends Model
{
    protected $fillable = [
        "nama_motor",
        "harga_motor",
        "kilo_motor",
        "tahun_motor",
        "foto_motor"
    ];
}
