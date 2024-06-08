<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Leccion;
use App\Models\Progreso;

class ProgresoController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $lecciones = Leccion::all();
        $progresos = Progreso::with(['usuario', 'leccion'])->get();
        return view('Ingreso.progreso', compact('progresos', 'usuarios', 'lecciones'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $lecciones = Leccion::all();
        return view('Ingreso.progreso', compact('usuarios', 'lecciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Usuario' => 'required|exists:usuarios,ID_Usuario',
            'idLeccion' => 'required|exists:lecciones,idLeccion',
            'puntuacion' => 'required|integer',
            'fechaCompletada' => 'required|date',
        ]);

    
        Progreso::create([
            'ID_Usuario' => $request->input('ID_Usuario'),
            'idLeccion' => $request->input('idLeccion'),
            'puntuacion' => $request->input('puntuacion'),
            'fechaCompletada' => $request->input('fechaCompletada'),
        ]);

        return redirect()->route('progreso.create')->with('success', 'Progreso creado exitosamente.');
    }
}