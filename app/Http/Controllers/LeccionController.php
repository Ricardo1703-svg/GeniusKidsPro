<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leccion;
use App\Models\Nivel;

class LeccionController extends Controller
{
    public function index()
    {
        $lecciones = Leccion::all();
        $niveles = Nivel::all();
        return view('Ingreso.lecciones', compact('lecciones', 'niveles'));
    }

    public function create()
    {
        $niveles = Nivel::all();
        return view('Ingreso.lecciones', compact('niveles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreLeccion' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'nivel' => 'required|exists:niveles,idNivel',
        ]);

        Leccion::create([
            'nombreLeccion' => $request->input('nombreLeccion'),
            'descripcion' => $request->input('descripcion'),
            'nivel' => $request->input('nivel'),
        ]);

        return redirect()->route('lecciones.index')->with('success', 'Lección creada exitosamente.');
    }
}