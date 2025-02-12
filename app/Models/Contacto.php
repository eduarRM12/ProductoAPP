<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'nombre',
        'apellido',
        'identificacion',
        'email',
        'celular',
        'es_cliente',
        'es_proveedor',
        'pais',
        'ciudad'
    ];

    protected $casts = [
        'es_cliente' => 'boolean',
        'es_proveedor' => 'boolean',
    ];
}
