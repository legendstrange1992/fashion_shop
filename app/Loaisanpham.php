<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $table = 'loaisanpham';
    public $timestamps = false;
    public $primaryKey = 'id_loaisanpham';
}
