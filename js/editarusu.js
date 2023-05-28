$(document).ready(function(){
    var idEditar=-1;
    $(".btnEditar").click(function(){
        idEditar=$(this).data('id');
        var nombre=$(this).data('nombre');
        var telefono=$(this).data('telefono');
        var correo=$(this).data('correo');
        var nivel=$(this).data('nivel');
        $("#idEdit").val(idEditar);
        $("#nombreEdit").val(nombre);
        $("#telEdit").val(telefono);
        $("#CorreoEdit").val(correo);
        $("#nivelEdit").val(nivel);
    });
});
