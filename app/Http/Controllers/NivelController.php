<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{
    public function index()
    {
        $niveles = Nivel::all();
        return view('Ingreso.niveles', compact('niveles'));
    }

    public function create()
    {

        return view('Vistas.verNiveles');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreNivel' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|string|max:255',
        ]);

        Nivel::create($request->all());

        return redirect()->route('niveles.index')->with('success', 'Nivel creado exitosamente.');
    }
    public function show($id)
    {
    }
}
