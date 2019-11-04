<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandartLKPP extends Model
{
	protected $table = 'standartlkpp';

    protected $primaryKey = 'standartid';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'standartid','standartname','createdate','deskripsi'
    ];
}
