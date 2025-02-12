<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCotizacion extends Model
{
    use HasFactory;

    protected $table = 'orden_cotizacion';

    protected $fillable = [
        'fecha_creacion',
        'fecha_cierre',
        'descripcion',
        'estado',
        'responsable'
    ];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'responsable');
    }
}
