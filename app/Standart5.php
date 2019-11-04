<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart5 extends Model
{
    protected $table = 'std5_permasalahan';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'docid', 'notiket', 'namapengguna', 'kontakpengguna', 'mediapelaporan', 'waktupelaporan', 'deskripsi', 'tipe', 'kategori', 'user', 'jenis', 'urgensi', 'dampak', 'prioritas', 'namapetugas', 'status', 'keterangan', 'tanggalpemutakhiran', 'solusi', 'tanggalpenyelesaian', 'statuskonfirmasi'
    ];
}
