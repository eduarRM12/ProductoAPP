<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $table = 'bodega';

    protected $fillable = [
        'nombre',
        'responsable'
    ];

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'responsable');
    }
}
