<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promo-mobil';
    protected $fillable = ['id_promo_mobil','dp','angsuran','hadiah','hadiah1','hadiah2','hadiah3','hadiah4','hadiah5','hadiah6','hadiah7'];
}
