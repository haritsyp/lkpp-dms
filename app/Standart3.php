<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart3 extends Model
{
    protected $table = 'std3_aset';

    protected $primaryKey = 'idaset';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'docid', 'idklasifikasi', 'nama', 'subklasifikasi', 'format', 'pemilik', 'masa', 'kerahasiaan', 'integritas','ketersediaan', 'nilai', 'keterangan', 'nip', 'jabatan', 'nokontrak', 'atasan', 'penyedia', 'pemegang', 'lokasi', 'deskripsikontrak', 'jenis', 'spesifikasi'
    ];
}
