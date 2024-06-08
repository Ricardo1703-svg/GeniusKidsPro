<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'niveles';

    protected $primaryKey = 'idNivel';

    protected $fillable = [
        'nombreNivel',
        'descripcion',
        'imagen',
    ];

    public function lecciones()
    {
        return $this->hasMany(Leccion::class, 'nivel', 'idNivel');
    }
}
