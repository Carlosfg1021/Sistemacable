<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre_empleado',
        'apellido_empleado',
        'dpi',
        'telefono',
        'direccion',
        'estado',
        'fecha_commit',
        'usuario',
        'contraseña'
    ];

    protected $guarded = [];
}
