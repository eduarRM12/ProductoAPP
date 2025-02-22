<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaProducto extends Model
{
    use HasFactory;

    protected $table = 'etiqueta_producto';

    protected $fillable = ['nombre'];
}
