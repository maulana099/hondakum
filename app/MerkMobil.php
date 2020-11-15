<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerkMobil extends Model
{
    protected $table = 'merk-mobil';
    protected $fillable = ['gambar','nama_mobil','harga','dp','angsuran'];
}
