$(document).ready(function() {  

  $("#div_contenedor_clientes").owlCarousel({
    autoPlay: 3500,
    items : 5,
    itemsDesktop : [1200,4],
    itemsDesktopSmall : [992,3],
    itemsTablet: [768,2],
    itemsMobile : [576,2],
    pagination: false,
    navigation: false
  });

});	

$(window).resize(function() {

});

/*FUNCIONES*/

function enviarContacto(){
    var url = "acciones/enviar_correo.php";
    var nombre = $("#txt_nombre").val();
    var email = $("#txt_email").val();
    var telefono = $("#txt_telefono").val();
    var asunto = $("#txt_asunto").val();
    var mensaje = $("#txt_mensaje").val();

    var parametros = {
         "nombre": nombre,
         "email": email,
         "telefono": telefono,
         "asunto" : asunto,
         "mensaje": mensaje
      };

    $.ajax({
      data: parametros,
      url: url,
      type: 'post',
      beforeSend: function () {
          $("#form_contacto").css("opacity","0.5");
      },
      success: function (response) {
          $("#form_contacto")[0].reset();
          $("#form_contacto").css("opacity","1");
          modal({
              type: 'success',
              title: 'Mensaje enviado',
              text: 'Gracias por comunicarte con nosotros',
          });          
        }

    });
}

/*FUNCIONES*/ 