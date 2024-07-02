<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;
     // Define los campos rellenables
     protected $fillable = [
        'nombre',
        'ubicacion',
        'distancia',
        'capacidad',
        'dormitorios',
        'area',
        'amenidades',
        'precio',
        'imagen',
    ];
}
