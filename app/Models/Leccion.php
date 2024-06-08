<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    use HasFactory;

    protected $table = 'lecciones';

    protected $primaryKey = 'idLeccion';

    protected $fillable = [
        'nombreLeccion',
        'descripcion',
        'nivel',
    ];

    public $timestamps = true;

    public function progresos()
    {
        return $this->hasMany(Progreso::class, 'leccion', 'idLeccion');
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'nivel', 'idNivel');
    }
}