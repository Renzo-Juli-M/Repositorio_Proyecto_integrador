<?php

namespace App\Http\Controllers;

use App\Models\Apartamento; // Asegúrate de tener el modelo Apartamento
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        // Obtener todos los apartamentos desde la base de datos
        $apartamentos = Apartamento::all();

        // Pasar los apartamentos a la vista
        return view('ofertas.index', compact('apartamentos'));
    }
}
