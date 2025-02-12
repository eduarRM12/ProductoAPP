<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUnidadMedida extends Model
{
    use HasFactory;

    protected $table = 'tipo_unidad_medida';

    protected $fillable = ['nombre'];

    public function unidadesMedida()
    {
        return $this->hasMany(UnidadMedida::class, 'tipo_unidad_medida_id');
    }
}
