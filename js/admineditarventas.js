$(document).ready(function(){
    var idEditar=-1;
    $(".btnEditar").click(function(){
        idEditar=$(this).data('id');
        var status=$(this).data('status');
        $("#idEdit").val(idEditar);
        $("#statusEdit").val(status);
    });
});
