<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Haza extends Model {
    protected $table = 'hazas';
    protected $primaryKey = 'idHaza';
    public $incrementing = false; 

    protected $fillable = [
        'idHaza',
        'nHaza',
        'partido',
        'hectareas',
        'rentaAnual',
        'uso',
        'localizacion',
        'caballerizas',
        'fechaInicio',
        'fechaFin',
    ];
}
