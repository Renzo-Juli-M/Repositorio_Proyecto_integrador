<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class ReservaController extends Controller
{
    public function reservar(Request $request)
    {
        // Lógica de reserva (puedes personalizar esto según tus necesidades)
        $reserva = [
            'apartamento' => $request->input('apartamento'),
            'fecha' => now(),
            'usuario' => auth()->check() ? auth()->user()->id : null,
            // Añadir más campos según sea necesario
        ];
        $reserva = [
            'apartamento' => $request->input('apartamento'),
            'nombre' => $request->input('nombre'),
            'dni' => $request->input('dni'),
            'telefono' => $request->input('telefono'),
            'estado_civil' => $request->input('estado_civil'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_fin' => $request->input('fecha_fin'),
            'monto' => $request->input('monto'),
        ];
        // Generar PDF
        $pdf = Pdf::loadView('offers.reserva_pdf', ['reserva' => $reserva]);

        return $pdf->download('reserva_' . time() . '.pdf');

        // Aquí puedes guardar la reserva en la base de datos o manejarla según sea necesario

        return response()->json(['message' => 'Reserva realizada con éxito', 'reserva' => $reserva]);
    }
}
