<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PadronColono extends Model {
    protected $table = 'padronColonos';
    protected $primaryKey = 'idColono';
    public $incrementing = false; 
    public $timestamps = false;

    protected $fillable = [
        'idColono',
        'apellido1',
        'apellido2',
        'nombre',
        'apodo',
        'dni',
        'telefono',
        'email',
        'idJuntaHazas',
        'idHabitante',
        'tipoDireccion',
        'nombreDireccion',
        'numeroDireccion',
        'bloqueDireccion',
        'escaleraDireccion',
        'piso',
        'puerta',
        'codigoPostal',
    ];
}
