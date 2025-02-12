<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoFacturaCompra extends Model
{
    use HasFactory;

    protected $table = 'producto_factura_compra';

    protected $fillable = [
        'precio',
        'valor_iva',
        'total',
        'cantidad',
        'valor_descuento',
        'iva',
        'descuento',
        'producto_id'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
