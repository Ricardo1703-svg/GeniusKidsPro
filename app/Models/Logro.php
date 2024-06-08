<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logro extends Model
{
    use HasFactory;

    protected $table = 'logros';
    protected $primaryKey = 'ID_Logro';
    public $timestamps = true;

    protected $fillable = [
        'ID_Usuario', 'ID_Actividad', 'Fecha_Logro'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_Usuario');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'ID_Actividad');
    }
}