$( document ).ready(function() {
    $('#modalEditar').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var asunto = button.data('asunto');
        var descripcion = button.data('descripcion');
        var aula = button.data('aula');

        var modal = $(this);
        modal.find('.modal-body #asuntoEditar').val(asunto);
        modal.find('.modal-body #descripcionEditar').val(descripcion);
        modal.find('.modal-body #aulaEditar').val(aula);
    })

});
