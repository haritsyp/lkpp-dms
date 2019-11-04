<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standart7 extends Model
{
    protected $table = 'std7_kapasitas';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id', 'docid', 'item', 'batasan', 'waktupemantauan', 'utilisasi', 'parameteraktual1', 'parameteraktual2', 'parameteraktual3', 'parameteraktual4', 'parameterakan1', 'parameterakan2', 'parameterakan3', 'parameterakan4', 'perkiraanresource', 'langkah'
    ];
}
