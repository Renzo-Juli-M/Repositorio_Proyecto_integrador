<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartado;

class ApartadoController extends Controller
{
    public function apartar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'estado_civil' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'monto' => 'required|numeric',
            'apartamento' => 'required|string|max:255',
        ]);

        Apartado::create($request->all());

        return redirect()->back()->with('success', 'Apartamento apartado exitosamente.');
    }
}

