<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart14 extends Model
{
    protected $table = 'std14_layanan';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id', 'docid', 'penyedia', 'alamat', 'nama', 'telp', 'email', 'bidang', 'kontrak', 'judul', 'mulai', 'selesai', 'nosla', 'target', 'pic', 'keterangan'
    ];  
}
