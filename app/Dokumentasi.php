<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
	protected $table = 'dokumentasi';
    protected $fillable = ['foto','keterangan'];
}
