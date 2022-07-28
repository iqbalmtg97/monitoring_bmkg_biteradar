<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanperbaikan extends Model
{
    protected $table = 'laporan_perbaikan_alat';
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = [
        'tgl_kerusakan', 'waktu_kerusakan', 'unit', 'nama_alat', 'merk_type', 'no_seri', 'tgl_perbaikan', 'waktu_perbaikan', 'teknisi', 'jenis_kerusakan', 'usaha_perbaikan', 'rekomendasi'
    ];
}
