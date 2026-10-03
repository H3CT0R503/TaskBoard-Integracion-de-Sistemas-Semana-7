<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    use HasFactory;

    // telefono y correo_contacto venían de la migración de la semana 6
    // pero faltaban aquí, así que no se podían asignar con create()
    protected $fillable = [
        'nombre_comercio',
        'rubro',
        'fecha_afiliacion',
        'telefono',
        'correo_contacto',
    ];

    public function transacciones()
    {
        return $this->hasMany(Transaccion::class);
    }
}