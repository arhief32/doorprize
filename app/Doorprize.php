<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doorprize extends Model
{
    protected $table = 'peserta';

    protected $fillable = [
        'doorprize_number',
        'doorprize_name',
        'status',
        'jenis_menang',
    ];
    
    public $timestamps = false;
}
