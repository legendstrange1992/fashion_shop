<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_facebook extends Model
{
    protected $table = "user_facebook";
    public $fillable = ['Name','email','avatar'];
    public $temstamps = true;
}
