<?php
namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        $apartamentos = Apartamento::all();
        return view('ofertas.index', compact('apartamentos'));
    }
}
