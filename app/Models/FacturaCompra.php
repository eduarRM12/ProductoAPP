<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaCompra extends Model
{
    use HasFactory;

    protected $table = 'factura_compra';

    protected $fillable = [
        'codigo_factura',
        'fecha_compra',
        'fecha_pago',
        'proveedor_id'
    ];

    public function proveedor()
    {
        return $this->belongsTo(Contacto::class, 'proveedor_id');
    }
}
