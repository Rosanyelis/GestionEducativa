@extends('layouts.app')
@section('styles')

@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('alumnos/guardar-alumno') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <h4 class="card-title">Nuevo Alumno</h4>
                        <div class="row">
                            <h4><small class="text-muted">Datos del Alumno</small></h4>
                            <hr>
                            <div class="col-md-4">
                                <div class="form-group @error('rut') has-danger @enderror">
                                    <label for="rut">RUT</label>
                                    <input id="rut" type="text" name="rut"
                                        class="form-control form-control-sm
                                        @error('rut') form-control-danger @enderror"
                                        placeholder="Ejm: 0000000-0" value="{{ old('rut') }}">
                                    @if ($errors->has('rut'))
                                        <span class="error text-danger">
                                            {{ $errors->first('rut') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('nombres') has-danger @enderror">
                                    <label for="nombres">Nombres</label>
                                    <input id="nombres" type="email" name="nombres"
                                        class="form-control form-control-sm
                                        @error('nombres') form-control-danger @enderror"
                                        placeholder="Ejm: Maria José" value="{{ old('nombres') }}">
                                    @if ($errors->has('nombres'))
                                        <span class="error text-danger">
                                            {{ $errors->first('nombres') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('apellido_paterno') has-danger @enderror">
                                    <label for="apellido_paterno">Apellido Paterno</label>
                                    <input id="apellido_paterno" type="text" name="apellido_paterno"
                                        class="form-control form-control-sm
                                        @error('apellido_paterno') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('apellido_paterno'))
                                        <span class="error text-danger">
                                            {{ $errors->first('apellido_paterno') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('apellido_materno') has-danger @enderror">
                                    <label for="apellido_materno">Apellido Materno</label>
                                    <input id="apellido_materno" type="text" name="apellido_materno"
                                        class="form-control form-control-sm
                                        @error('apellido_materno') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('apellido_materno'))
                                        <span class="error text-danger">
                                            {{ $errors->first('apellido_materno') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('sexo') has-danger @enderror">
                                    <label for="sexo">Sexo</label>
                                    <select class="form-control form-control-sm"
                                        id="sexo" name="sexo">
                                        <option>Seleccione..</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                    @if ($errors->has('sexo'))
                                        <span class="error text-danger">
                                            {{ $errors->first('sexo') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('fecha_nacimiento') has-danger @enderror">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input id="fecha_nacimiento" type="date" name="fecha_nacimiento"
                                        class="form-control form-control-sm
                                        @error('fecha_nacimiento') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('fecha_nacimiento'))
                                        <span class="error text-danger">
                                            {{ $errors->first('fecha_nacimiento') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('domicilio') has-danger @enderror">
                                    <label for="domicilio">Domicilio</label>
                                    <input id="domicilio" type="text" name="domicilio"
                                        class="form-control form-control-sm
                                        @error('domicilio') form-control-danger @enderror"
                                        placeholder="Ejm. Flores, calle 98">
                                    @if ($errors->has('domicilio'))
                                        <span class="error text-danger">
                                            {{ $errors->first('domicilio') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('comuna') has-danger @enderror">
                                    <label for="comuna">Comuna</label>
                                    <input id="comuna" type="text" name="comuna"
                                        class="form-control form-control-sm
                                        @error('comuna') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('comuna'))
                                        <span class="error text-danger">
                                            {{ $errors->first('comuna') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('procedencia') has-danger @enderror">
                                    <label for="procedencia">Procedencia</label>
                                    <input id="procedencia" type="text" name="procedencia"
                                        class="form-control form-control-sm
                                        @error('procedencia') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('procedencia'))
                                        <span class="error text-danger">
                                            {{ $errors->first('procedencia') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="w-100 mt-4"></div>
                            <h4><small class="text-muted">Datos de los Padres del Alumno</small></h4>
                            <hr>
                            <div class="col-md-4">
                                <div class="form-group @error('rut_madre') has-danger @enderror">
                                    <label for="rut_madre">RUT de la Madre</label>
                                    <input id="rut" type="text" name="rut_madre"
                                        class="form-control form-control-sm
                                        @error('rut_madre') form-control-danger @enderror"
                                        placeholder="Ejm: 0000000-0" value="{{ old('rut_madre') }}">
                                    @if ($errors->has('rut_madre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('rut_madre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('nombre_madre') has-danger @enderror">
                                    <label for="nombre_madre">Nombre de la Madre</label>
                                    <input id="nombre_madre" type="text" name="nombre_madre"
                                        class="form-control form-control-sm
                                        @error('nombre_madre') form-control-danger @enderror"
                                        placeholder="Ejm: Maria José" value="{{ old('nombre_madre') }}">
                                    @if ($errors->has('nombre_madre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('nombre_madre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('telefono_madre') has-danger @enderror">
                                    <label for="telefono_madre">Teléfono de la Madre</label>
                                    <input id="telefono_madre" type="text" name="telefono_madre"
                                        class="form-control form-control-sm
                                        @error('telefono_madre') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('telefono_madre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('telefono_madre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('escolaridad_madre') has-danger @enderror">
                                    <label for="escolaridad_madre">Escolaridad de la Madre</label>
                                    <input id="escolaridad_madre" type="text" name="escolaridad_madre"
                                        class="form-control form-control-sm
                                        @error('escolaridad_madre') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('escolaridad_madre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('escolaridad_madre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('rut_padre') has-danger @enderror">
                                    <label for="rut_padre">RUT del Padre</label>
                                    <input id="rut" type="text" name="rut_padre"
                                        class="form-control form-control-sm
                                        @error('rut_padre') form-control-danger @enderror"
                                        placeholder="Ejm: 0000000-0" value="{{ old('rut_padre') }}">
                                    @if ($errors->has('rut_padre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('rut_padre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('nombre_padre') has-danger @enderror">
                                    <label for="nombre_padre">Nombre del Padre</label>
                                    <input id="nombre_padre" type="text" name="nombre_padre"
                                        class="form-control form-control-sm
                                        @error('nombre_padre') form-control-danger @enderror"
                                        placeholder="Ejm: Maria José" value="{{ old('nombre_padre') }}">
                                    @if ($errors->has('nombre_padre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('nombre_padre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('telefono_padre') has-danger @enderror">
                                    <label for="telefono_padre">Teléfono del Padre</label>
                                    <input id="telefono_padre" type="text" name="telefono_padre"
                                        class="form-control form-control-sm
                                        @error('telefono_padre') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('telefono_padre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('telefono_padre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('escolaridad_padre') has-danger @enderror">
                                    <label for="escolaridad_padre">Escolaridad del Padre</label>
                                    <input id="escolaridad_padre" type="text" name="escolaridad_padre"
                                        class="form-control form-control-sm
                                        @error('escolaridad_padre') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('escolaridad_padre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('escolaridad_padre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="w-100 mt-4"></div>
                            <h4><small class="text-muted">Datos del Apoderado del Alumno</small></h4>
                            <hr>
                            <div class="col-md-4">
                                <div class="form-group @error('rut_apoderado') has-danger @enderror">
                                    <label for="rut_apoderado">RUT del Apoderado</label>
                                    <input id="rut" type="text" name="rut_apoderado"
                                        class="form-control form-control-sm
                                        @error('rut_apoderado') form-control-danger @enderror"
                                        placeholder="Ejm: 0000000-0" value="{{ old('rut_apoderado') }}">
                                    @if ($errors->has('rut_apoderado'))
                                        <span class="error text-danger">
                                            {{ $errors->first('rut_apoderado') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('nombre_apoderado') has-danger @enderror">
                                    <label for="nombre_apoderado">Nombre del Apoderado</label>
                                    <input id="nombre_apoderado" type="text" name="nombre_apoderado"
                                        class="form-control form-control-sm
                                        @error('nombre_apoderado') form-control-danger @enderror"
                                        placeholder="Ejm: Maria José" value="{{ old('nombre_apoderado') }}">
                                    @if ($errors->has('nombre_apoderado'))
                                        <span class="error text-danger">
                                            {{ $errors->first('nombre_apoderado') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('telefono_casa_apoderado') has-danger @enderror">
                                    <label for="telefono_casa_apoderado">Teléfono de Casa del Apoderado</label>
                                    <input id="telefono_casa_apoderado" type="text" name="telefono_casa_apoderado"
                                        class="form-control form-control-sm
                                        @error('telefono_casa_apoderado') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('telefono_casa_apoderado'))
                                        <span class="error text-danger">
                                            {{ $errors->first('telefono_casa_apoderado') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('telefono_trabajo_apoderado') has-danger @enderror">
                                    <label for="telefono_trabajo_apoderado">Teléfono del Trabajo del Apoderado</label>
                                    <input id="telefono_trabajo_apoderado" type="text" name="telefono_trabajo_apoderado"
                                        class="form-control form-control-sm
                                        @error('telefono_trabajo_apoderado') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('telefono_trabajo_apoderado'))
                                        <span class="error text-danger">
                                            {{ $errors->first('telefono_trabajo_apoderado') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('correo_apoderado') has-danger @enderror">
                                    <label for="correo_apoderado">Correo del Apoderado</label>
                                    <input id="correo_apoderado" type="text" name="correo_apoderado"
                                        class="form-control form-control-sm
                                        @error('correo_apoderado') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('correo_apoderado'))
                                        <span class="error text-danger">
                                            {{ $errors->first('correo_apoderado') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('vive_con') has-danger @enderror">
                                    <label for="vive_con">Vive con</label>
                                    <input id="vive_con" type="text" name="vive_con"
                                        class="form-control form-control-sm
                                        @error('vive_con') form-control-danger @enderror"
                                        placeholder="Doe">
                                    @if ($errors->has('vive_con'))
                                        <span class="error text-danger">
                                            {{ $errors->first('vive_con') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="float-end" >
                            <a href="{{ url('configuraciones/usuarios') }}" class="btn btn-secondary">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')

@endsection
