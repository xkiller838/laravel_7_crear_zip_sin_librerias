<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    protected $table = 'archivos';

    protected $fillable = [
        'nombre', 'archivo'
    ];
}
