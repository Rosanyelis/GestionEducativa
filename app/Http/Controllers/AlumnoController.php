<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Representate;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Alumno::all();
        return view('alumnos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rut' => ['required'],
            'nombres' => ['required'],
            'apellido_paterno' => ['required'],
            'apellido_materno' => ['required'],
            'sexo' => ['required'],
            'fecha_nacimiento' => ['required'],
            'domicilio' => ['required'],
            'comuna' => ['required'],
            'procedencia' => ['required'],
            'rut_apoderado' => ['required'],
            'nombre_apoderado' => ['required'],
            'telefono_trabajo_apoderado' => ['required'],
            'telefono_casa_apoderado' => ['required'],
            'correo_apoderado' => ['required'],
            'vive_con' => ['required'],
        ],
        [
            'rut.required' => ['El campo Rut de Alumno es obligatorio'],
            'nombres.required' => ['El campo Nombres es obligatorio'],
            'apellido_paterno.required' => ['El campo Apellido Paterno es obligatorio'],
            'apellido_materno.required' => ['El campo Apellido Materno es obligatorio'],
            'sexo.required' => ['El campo Sexo es obligatorio'],
            'fecha_nacimiento.required' => ['El campo Fecha de Nacimiento es obligatorio'],
            'domicilio.required' => ['El campo Domicilio es obligatorio'],
            'comuna.required' => ['El campo Comuna es obligatorio'],
            'procedencia.required' => ['El campo Procedencia es obligatorio'],
            'rut_apoderado.required' => ['El campo RUT de Apoderado es obligatorio'],
            'nombre_apoderado.required' => ['El campo Nombre de Apoderado es obligatorio'],
            'telefono_trabajo_apoderado.required' => ['El campo Teléfono de Trabajo de Apoderado es obligatorio'],
            'telefono_casa_apoderado.required' => ['El campo Teléfono de Casa de Apoderado es obligatorio'],
            'correo_apoderado.required' => ['El campo Correo de Apoderado es obligatorio'],
            'vive_con.required' => ['El campo Vive con es obligatorio'],
        ]);

        $alumno = Alumno::create([
            'rut' => $request->rut,
            'nombres' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'sexo' => $request->sexo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'domicilio' => $request->domicilio,
            'comuna' => $request->comuna,
            'procedencia' => $request->procedencia,
        ]);
        $representante = Representate::create([
            'alumno_id' => $alumno->id,
            'rut_madre' => $request->rut_madre,
            'nombre_madre' => $request->nombre_madre,
            'telefono_madre' => $request->telefono_madre,
            'escolaridad_madre' => $request->escolaridad_madre,
            'rut_padre' => $request->rut_padre,
            'nombre_padre' => $request->nombre_padre,
            'telefono_padre' => $request->telefono_padre,
            'escolaridad_padre' => $request->escolaridad_padre,
            'rut_apoderado' => $request->rut_apoderado,
            'nombre_apoderado' => $request->nombre_apoderado,
            'telefono_casa_apoderado' => $request->telefono_casa_apoderado,
            'telefono_trabajo_apoderado' => $request->telefono_trabajo_apoderado,
            'correo_apoderado' => $request->correo_apoderado,
            'vive_con' => $request->vive_con,
        ]);

        return redirect('alumnos')->with('success', 'Se ha Registrado el Usuario con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
