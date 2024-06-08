<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('Ingreso.usuario', compact('usuarios'));
    }

    public function create()
    {
        $usuarios = collect();
    return view('Ingreso.usuario', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:50',
            'Edad' => 'required|integer',
            'Nivel_Educativo' => 'nullable|string|max:50',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }
}