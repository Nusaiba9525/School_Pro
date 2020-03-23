<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    protected $table = 'AdminLogins';
   public $timestamps = false;
   protected $fillable = ['UserId','Username','Password'];
}
