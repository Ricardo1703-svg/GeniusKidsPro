<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('Ingreso.actividades', compact('actividades'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'Tipo_Actividad' => 'required|string|max:50',
            'Descripcion' => 'required|string',
            'Edad_Recomendada' => 'required|integer',
        ]);

        Actividad::create($request->all());

        return redirect()->route('actividades.index')->with('success', 'Actividad creada exitosamente.');
    }

    public function show($id)
    {
    }
}
