<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;

    protected $table = 'unidad_medida';

    protected $fillable = ['nombre', 'tipo_unidad_medida_id'];

    public function tipoUnidadMedida()
    {
        return $this->belongsTo(TipoUnidadMedida::class, 'tipo_unidad_medida_id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'unidad_medida_id');
    }
}
