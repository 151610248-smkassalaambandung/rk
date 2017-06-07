<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_lengkap','harga','diskon'];
    protected $visible = ['nama_lengkap','harga','diskon'];
    public $timestamps = true;
}


