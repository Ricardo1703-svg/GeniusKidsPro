<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'ID_Usuario';

    protected $fillable = [
        'Nombre', 'Edad', 'Nivel_Educativo'
    ];

    public function progresos()
    {
        return $this->hasMany(Progreso::class, 'usuario', 'ID_Usuario');
    }
}