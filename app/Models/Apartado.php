<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dni',
        'telefono',
        'estado_civil',
        'fecha_inicio',
        'fecha_fin',
        'monto',
        'apartamento'
    ];
}
