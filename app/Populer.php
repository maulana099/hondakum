<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    protected $table = 'populer';
    protected $fillable = ['ket_populer','foto_populer'];
}
