<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    use HasFactory;

    protected $table = 'progreso';
    protected $primaryKey = 'idProgreso';

    protected $fillable = [
        'ID_Usuario',
        'idLeccion',
        'puntuacion',
        'fechaCompletada',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_Usuario', 'ID_Usuario');
    }

    public function leccion()
    {
        return $this->belongsTo(Leccion::class, 'idLeccion', 'idLeccion');
    }
}