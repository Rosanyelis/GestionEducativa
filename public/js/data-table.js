(function($) {
  'use strict';
  $(function() {
    $('#order-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        decimal:        "",
        emptyTable:     "No hay registros disponibles en la tabla",
        info:           "Mostrando _START_ a _END_ de _TOTAL_ registros",
        infoEmpty:      "Mostrando 0 a 0 de 0 registros",
        infoFiltered:   "(Filtrando por _MAX_ registros totales)",
        infoPostFix:    "",
        thousands:      ",",
        lengthMenu:     "Mostrar _MENU_ registros",
        loadingRecords: "Cargando...",
        processing:     "",
        search:         "Buscar:",
        zeroRecords:    "Los registros no se encuentran",
        paginate: {
            first:      "Primero",
            last:       "Último",
            next:       "Siguiente",
            previous:   "Anterior"
        },
      }
    });
    $('#order-listing').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Buscar');
    //   search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
    //   length_sel.removeClass('form-control-sm');
    });
  });
})(jQuery);
