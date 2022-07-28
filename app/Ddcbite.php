<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ddcbite extends Model
{
    protected $table = 'ddcbite';
    protected $primaryKey = 'eid';
    protected $guarded = [];
    public $timestamps = false;
}
