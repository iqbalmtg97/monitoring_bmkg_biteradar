<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanpemeliharaan extends Model
{
    protected $table = 'laporan_pemeliharaan_alat';
    protected $guarded = [];
    public $timestamps = false;
}
