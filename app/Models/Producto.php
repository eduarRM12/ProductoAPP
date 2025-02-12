<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = [
        'nombre', 
        'referencia', 
        'etiquetas', 
        'descripcion', 
        'url', 
        'precio_venta', 
        'iva', 
        'unidad_medida_id'
    ];

    protected $casts = [
        'etiquetas' => 'array', // Convierte JSON en array automáticamente
    ];

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class, 'unidad_medida_id');
    }

    public function impuestos()
    {
        return $this->belongsToMany(Impuesto::class, 'producto_impuesto')->withPivot('porcentaje');
    }

    public function bodegas()
    {
        return $this->belongsToMany(Bodega::class, 'producto_bodega')->withPivot('stock maximo', 'stock minimo');
    }

    public function facturasCompra()
    {
        return $this->hasMany(ProductoFacturaCompra::class, 'producto_id');
    }
}