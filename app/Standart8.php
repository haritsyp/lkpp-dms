<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart8 extends Model
{
    protected $table = 'std8_kompetensi';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'docid', 'jabatan', 'nama', 'kebutuhankompetensi', 'kebutuhantingkatan', 'adakompetensi', 'adatingkatan', 'analisakebutuhan', 'pelatihan', 'tingkatan', 'waktu'
    ];
}