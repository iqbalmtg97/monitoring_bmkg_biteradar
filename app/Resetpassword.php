<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resetpassword extends Model
{
    protected $table = 'reset_password';
    protected $fillable = ['email'];
    protected $guarded = [];
    public $timestamps = false;
}
