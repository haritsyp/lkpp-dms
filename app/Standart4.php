<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart4 extends Model
{
    protected $table = 'std4_risiko';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id', 'docid', 'idklasifikasi', 'subklasifikasi', 'kerentatanket', 'kerentatannilai', 'paparanket', 'paparannilai', 'jenisrisikosisa', 'nilairisikosisa', 'mitigasikontrol', 'mitigasipic', 'mitigasitarget'
    ];
}
