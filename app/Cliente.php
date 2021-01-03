<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;

    protected $fillable = [
        'nombre_cliente',
        'apellido_clinete',
        'dpi',
        'nit',
        'telefono',
        'propiedad',
        'estado',
        'fecha_commit'
    ];

    protected $guarded = [];

}
