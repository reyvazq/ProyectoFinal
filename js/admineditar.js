$(document).ready(function(){
    var idEditar=-1;
    $(".btnEditar").click(function(){
        idEditar=$(this).data('id');
        var nombre=$(this).data('nombre');
        var descripcion=$(this).data('descripcion');
        var precio=$(this).data('precio');
        var inventario=$(this).data('inventario');
        $("#idEdit").val(idEditar);
        $("#nombreEdit").val(nombre);
        $("#descripcionEdit").val(descripcion);
        $("#precioEdit").val(precio);
        $("#inventarioEdit").val(inventario);
    });
});
