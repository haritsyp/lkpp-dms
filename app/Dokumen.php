<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
	protected $table = 'documents';

    protected $primaryKey = 'docid';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'detailid','tipeid','docname','filename','uploaddate','source'
    ];
}
