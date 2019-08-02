<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doorprize extends Model
{
    protected $table = 'peserta';

    protected $fillable = [
        'doorprize_number',
        'doorprize_name',
    ];
    
    public $timestamps = false;
}
