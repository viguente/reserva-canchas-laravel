<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    public function index()
    {
        $canchas = Cancha::all();
        
        return response()->json($canchas, 200);
    }

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
            'precioHora' => ['required', 'integer', 'min:0'],
            'imagen' => ['required', 'string', 'max:255'],
            'imagenBanner' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'horariosDisponibles' => ['required', 'array', 'min:1'],
            'horariosDisponibles.*' => ['required', 'date_format:H:i'],
            'horarioAtencion' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'prestaciones' => ['required', 'array'],
            'prestaciones.*' => ['required', 'string', 'max:255'],
        ]);
        $cancha = Cancha::create($datos);
        return response()->json($cancha,201);
    }
    
    public function remove($id){
        $cancha = Cancha::findOrFail($id);
        $cancha->delete();

        return response()->json([
            'sucess' => true,
            'data' => 'cancha eliminada correctamente'
        ],200);
    }
}