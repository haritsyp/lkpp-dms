<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctipe extends Model
{
    protected $primaryKey = 'tipeid';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'tipename'
    ];
}
