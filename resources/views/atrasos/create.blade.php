@extends('layouts.app')
@section('styles')

@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" novalidate="novalidate">
                        @csrf
                        <h4 class="card-title">Nuevo Atraso</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @error('codigo_barra') has-danger @enderror">
                                    <label for="codigo_barra">Código de Barra</label>
                                    <input id="codigo_barra" type="text" name="codigo_barra"
                                        class="form-control form-control-sm
                                        @error('codigo_barra') form-control-danger @enderror"
                                        placeholder="Ejm: Jon Doe" autofocus value="{{ old('codigo_barra') }}">
                                    @if ($errors->has('codigo_barra'))
                                        <span class="error text-danger">
                                            {{ $errors->first('codigo_barra') }}
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-8">
                                <div class="form-group @error('alumno') has-danger @enderror">
                                    <label for="alumno">Alumno</label>
                                    <input id="alumno" type="alumno" name="alumno"
                                        class="form-control form-control-sm
                                        @error('alumno') form-control-danger @enderror"
                                        placeholder="Ejm: JonDoe@example.com" readonly>
                                    @if ($errors->has('alumno'))
                                        <span class="error text-danger">
                                            {{ $errors->first('alumno') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('curso') has-danger @enderror">
                                    <label for="curso">Curso</label>
                                    <select class="form-control form-control-sm"
                                        id="sexo" name="sexo">
                                        <option>Seleccione..</option>
                                    </select>
                                    @if ($errors->has('curso'))
                                        <span class="error text-danger">
                                            {{ $errors->first('curso') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('semestre') has-danger @enderror">
                                    <label for="semestre">Semestre</label>
                                    <select class="form-control form-control-sm"
                                        id="sexo" name="sexo">
                                        <option>Seleccione..</option>
                                    </select>
                                    @if ($errors->has('semestre'))
                                        <span class="error text-danger">
                                            {{ $errors->first('semestre') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="float-end" >
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
