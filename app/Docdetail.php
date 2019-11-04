<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docdetail extends Model
{
    protected $primaryKey = 'detailid';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'standartid','no','butir','deskriptor'
    ];
}
