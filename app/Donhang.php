<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    protected $table = "donhang";
    public $timestamps = false;
    protected $primaryKey = 'id_donhang';
}
