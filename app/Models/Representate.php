<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representate extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'alumno_id',
        'nombre_madre',
        'rut_madre',
        'telefono_madre',
        'escolaridad_madre',
        'nombre_padre',
        'rut_padre',
        'telefono_padre',
        'escolaridad_padre',
        'nombre_apoderado',
        'rut_apoderado',
        'telefono_casa_apoderado',
        'telefono_trabajo_apoderado',
        'vive_con',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id', 'id');
    }
}
