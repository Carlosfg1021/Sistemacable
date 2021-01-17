<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'serv';
    protected $primaryKey = 'id_serv';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'estado',
        'fecha_commit',
        'fecha_update',
        'usuario'
    ];

    protected $guarded = [];

}
