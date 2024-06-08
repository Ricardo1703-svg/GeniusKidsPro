<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';
    protected $primaryKey = 'ID_Actividad';
    public $timestamps = true;

    protected $fillable = [
        'Tipo_Actividad', 'Descripcion', 'Edad_Recomendada'
    ];

    public function logros()
    {
        return $this->hasMany(Logro::class, 'ID_Actividad');
    }
}