<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompraProducto extends Model
{
    use HasFactory;

    protected $table = 'orden_compra_producto';

    protected $fillable = [
        'precio',
        'valor_iva',
        'total',
        'cantidad',
        'valor_descuento',
        'iva',
        'descuento',
        'forma_pago',
        'cantidad_cuotas',
        'tipo_moneda',
        'producto_id',
        'orden_compra_id'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function ordenCompra()
    {
        return $this->belongsTo(OrdenCompra::class, 'orden_compra_id');
    }
}
