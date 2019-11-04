<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart9 extends Model
{
	protected $table = 'std9_fasilitas';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'docid', 'nama', 'instansi', 'alamat', 'jenis', 'noidentitas', 'nobadge', 'tanggal', 'jammasuk', 'jamkeluar', 'tujuan', 'masukperangkat', 'keluarperangkat'
    ];    
}
