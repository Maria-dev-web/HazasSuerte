<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PadronHabitante extends Model {
    protected $table = 'padronHabitantes';
    protected $primaryKey = 'idHabitante';
    public $incrementing = false; 
    public $timestamps = false;

    //
    protected $fillable = [
        'idHabitante',
        'apellido1',
        'apellido2',
        'nombre',
        'domicilioOriginal',
        'tipoDireccion',
        'nombreDireccion',
        'numeroDireccion',
        'bloqueDireccion',
        'escaleraDireccion',
        'piso',
        'puerta',
        'codigoPostal',
        'excluido',
        'fechaExclusion',
        'observaciones',
    ];
}
