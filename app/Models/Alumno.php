<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory, HasUuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'codigo_barra',
        'rut',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'comuna',
        'procedencia',
        'causal_retiro',
        'fecha_retiro',
        'fecha_egreso',
        'estatus',
    ];

    /**
     * obtiene los datos del representante
     */
    public function representante()
    {
        return $this->hasOne(Representante::class, 'alumno_id', 'id');
    }
}
