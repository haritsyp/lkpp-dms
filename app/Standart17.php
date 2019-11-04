<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart17 extends Model
{
    protected $table = 'std17_penilaian';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'docid', 'standar', 'kriteria', 'notemuan', 'keterangantemuan', 'nopermintaan', 'keteranganpermintaan', 'prioritas', 'target', 'penilai', 'pic', 'keterangantindakan', 'tanggalperbaikan', 'statusperbaikan', 'persetujuan'
    ];
}
