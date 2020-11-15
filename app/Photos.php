<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'sidebar';
    protected $fillable = ['caption','photos'];
}
