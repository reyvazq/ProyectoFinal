$(document).ready(function() {/* funcion para eliminar al dar clic a la X */
    $(".btnEliminar").click(function(event) {
        event.preventDefault();
      var id = $(this).data("id");
      var boton = $(this);
      $.ajax({
        method: 'POST',
        url: './modelo/eliminarCarrito.php',
        data: {
            id:id
        }
      }).done(function(respuesta){/* Fin de la funcion para eliminar al dar clic a la X */
        boton.parent('td').parent('tr').remove();    
      });
    });
    $(".txcantidad").keyup(function(){/* Actualizar precios front end por medio del input*/
      var cantidad = $(this).val();
      var precio = $(this).data('precio');
      var id = $(this).data('id');
      incrementar(cantidad,precio,id);
    });
    $(".btnincrementar").click(function(){/* Actualizar precios font end por medio de los botones "+ y -"*/
        var precio = $(this).parent('div').parent('div').find('input').data('precio');
        var id = $(this).parent('div').parent('div').find('input').data('id');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad,precio,id);
    });
    function incrementar(cantidad, precio, id){  /* Funcion para actualizar precios back end */
      var mult = parseFloat(cantidad)*parseFloat(precio);
      $(".cant"+id).text("$"+mult);
      $
      $.ajax({
        method: 'POST',
        url: './modelo/actualizar.php',
        data: {
            id:id,
            cantidad:cantidad
        }
      }).done(function(respuesta){
        $("#total").text("$"+respuesta);
        $("#subtotal").text("$"+respuesta);
      });
    }
  });
  

  
  