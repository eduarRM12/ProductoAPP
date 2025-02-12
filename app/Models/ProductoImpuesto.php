<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImpuesto extends Model
{
    use HasFactory;

    protected $table = 'producto_impuesto';

    protected $fillable = ['porcentaje', 'producto_id', 'impuesto_id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function impuesto()
    {
        return $this->belongsTo(Impuesto::class, 'impuesto_id');
    }
}
