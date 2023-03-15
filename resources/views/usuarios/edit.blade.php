@extends('layouts.app')
@section('styles')

@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('configuraciones/usuarios/'.$data->id.'/actualizar-usuario') }}" method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <h4 class="card-title">Editar Usuario</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group @error('username') has-danger @enderror">
                                    <label for="username">Usuario</label>
                                    <input id="username" type="text" name="username"
                                        class="form-control form-control-sm
                                        @error('username') form-control-danger @enderror"
                                        value="{{ $data->name }}">
                                    @if ($errors->has('username'))
                                        <span class="error text-danger">
                                            {{ $errors->first('username') }}
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('email') has-danger @enderror">
                                    <label for="email">Correo Electrónico</label>
                                    <input id="email" type="email" name="email"
                                        class="form-control form-control-sm
                                        @error('email') form-control-danger @enderror"
                                        placeholder="Ejm: JonDoe@example.com" value="{{ $data->email }}">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group @error('email') has-danger @enderror">
                                    <label for="password">Contraseña</label>
                                    <input id="password" type="password" name="password"
                                        class="form-control form-control-sm
                                        @error('password') form-control-danger @enderror"
                                        placeholder="*************">
                                    @if ($errors->has('password'))
                                        <span class="error text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="float-end" >
                            <a href="{{ url('configuraciones/usuarios') }}" class="btn btn-secondary">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Actualizar</button>
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
