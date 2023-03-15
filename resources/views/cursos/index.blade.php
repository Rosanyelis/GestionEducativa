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
                        <div class="col-md-10"><h4 class="card-title">Cursos</h4></div>
                        <div class="col-md-2">
                            <a href="javascript:;" class="btn btn-primary btn-sm float-end">
                                <i class="fa fa-plus"></i> Nuevo Curso
                            </a>
                        </div>
                        <div class="col-12 ">
                            <div class="table-responsive mt-3">
                                <table id="order-listing" class="table display expandable-table ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Curso</th>
                                            <th>Letra</th>
                                            <th width="40px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>Curso 1</td>
                                            <td>A</td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-link btn-sm "
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Editar">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-link btn-sm text-danger delete-record"
                                                data-bs-toggle="tooltip" data-placement="bottom"
                                                title="Eliminar" data-id="">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                                <form id="delete-" action="javascript:;" method="POST">
                                                    @csrf

                                                </form>
                                            </td>
                                        </tr>
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
