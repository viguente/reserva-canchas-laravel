<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    public function index()
    {
        // Obtiene todas las canchas de la base de datos
        $canchas = Cancha::all();
        
        // Retorna un JSON con código de estado HTTP 200 (OK)
        return response()->json($canchas, 200);
    }

    // Opcional: Para obtener solo una cancha por su ID (ej: para la vista de detalle)
    public function show($id)
    {
        $cancha = Cancha::findOrFail($id);
        return response()->json($cancha, 200);
    }

    public function store (Request $request){
        $datos = $request->validate([
            'nombre' => 'required | string| max:255',
            'deporte' => 'required | string| max:255',
            'superficie' => 'required | string| max:255',
        ]);
        $cancha = Cancha::create($datos);
        return response()->json($cancha,201);
    }
}