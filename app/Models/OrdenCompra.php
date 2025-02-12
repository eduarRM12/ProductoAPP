<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    protected $table = 'orden_compra';

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

    public function productos()
    {
        return $this->hasMany(OrdenCompraProducto::class, 'orden_compra_id');
    }
}
