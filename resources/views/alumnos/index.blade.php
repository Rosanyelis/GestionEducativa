@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><h4 class="card-title">Alumnos</h4></div>
                        <div class="col-md-6">
                            <a href="{{ url('alumnos/nuevo-alumno') }}" class="btn btn-primary btn-sm ">
                                <i class="fa fa-plus"></i> Nuevo Alumno
                            </a>    
                            <a href="{{ url('alumnos/nuevo-alumno') }}" class="btn btn-secondary btn-sm ">
                                <i class="fa fa-upload"></i> Carga Masiva
                            </a>
                            <a href="{{ url('alumnos/nuevo-alumno') }}" class="btn btn-warning btn-sm ">
                                <i class="fa fa-file-excel-o"></i> Exportar Selectivo
                            </a>
                            <a href="{{ url('alumnos/nuevo-alumno') }}" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel-o"></i> Exportar Todo
                            </a>
                        </div>
                        <div class="col-12 ">
                            <div class="table-responsive mt-3">
                                <table id="order-listing" class="table display expandable-table ">
                                    <thead>
                                        <tr>
                                            <th width="40px">#</th>
                                            <th>Alumno</th>
                                            <th width="40px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->apellido_paterno }} {{ $item->apellido_materno }}, {{ $item->nombres }}</td>
                                            <td>
                                                <a href="{{ url('alumnos/'.$item->id.'/ver-alumno') }}" class="btn btn-link btn-sm "
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Ver">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ url('alumnos/'.$item->id.'/editar-alumno') }}" class="btn btn-link btn-sm "
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Editar">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="javacript:;" class="btn btn-link btn-sm "
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Retiro">
                                                    <i class="fa fa-minus"></i>
                                                </a>
                                                <button class="btn btn-link btn-sm text-danger delete-record"
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Eliminar" data-id="{{ $item->id }}">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                                <form id="delete-{{ $item->id }}" action="{{ url('alumnos/'.$item->id.'/eliminar-alumno') }}" method="POST">
                                                    @csrf

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('scripts')
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/data-table.js') }}"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>
<script src="{{ asset('js/popover.js') }}"></script>
<script>
    (function($) {
        'use strict';

        $('.table tbody').on('click', '.delete-record', function(){
            let dataid = $(this).data('id');
            swal({
                title: '¿Está Seguro de Eliminar el Registro?',
                text: "Si tiene datos dependientes, no podrá Eliminarlo!",
                icon: 'warning',
                buttons: {
                    cancel: {
                        text: "Cancelar",
                        value: null,
                        visible: true,
                        className: "btn btn-danger",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Si, estoy seguro!",
                        value: true,
                        visible: true,
                        className: "btn btn-primary",
                        closeModal: true
                    }
                }
            }).then((result) => {
                if (result == true) {
                    let clase = '#delete-'+dataid;
                    $(clase).submit();
                }
            });
        });
    })(jQuery);
</script>
{{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}
@endsection
