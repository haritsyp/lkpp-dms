<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart13 extends Model
{
    protected $table = 'std13_anggaran';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id', 'docid', 'header', 'komponen', 'struktur', 'total', 'anggaranfinansial', 'anggaranlpse', 'pemantauan1', 'pemantauan2', 'pemantauan3', 'pemantauan4'
    ];  
}
