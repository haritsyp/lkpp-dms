<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart10 extends Model
{
    protected $table = 'std10_remoteakses';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id', 'docid', 'nama', 'instansi', 'hakakses', 'tujuan', 'waktupemberian', 'waktupenutupan','username'
    ];  
}
