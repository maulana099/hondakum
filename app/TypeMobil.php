<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMobil extends Model
{
    protected $table = 'type-mobil';
    protected $fillable = ['id_mobil','type','harga_type'];

 } 