<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengunjungPromo extends Model
{
    protected $table = 'pengunjung-promo';
    protected $fillable = ['kabupaten','nama','no_hp'];
}
