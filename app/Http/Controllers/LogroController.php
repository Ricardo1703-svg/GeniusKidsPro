<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logro;
use App\Models\Usuario;
use App\Models\Actividad;

class LogroController extends Controller
{
    public function index()
    {
        $logros = Logro::all();
        $usuarios = Usuario::all();
        $actividades = Actividad::all();
        return view('Ingreso.logros', compact('logros', 'usuarios', 'actividades'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $actividades = Actividad::all();
        return view('Ingreso.logros', compact('usuarios', 'actividades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Usuario' => 'required|exists:usuarios,ID_Usuario',
            'ID_Actividad' => 'required|exists:actividades,ID_Actividad',
            'Fecha_Logro' => 'required|date',
        ]);

        Logro::create($request->all());

        return redirect()->route('logros.index')->with('success', 'Logro creado exitosamente.');
    }
}