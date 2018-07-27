$(document).ready(function(){
    $(".owl-team").owlCarousel({
               items: 2, 
               autoplay: true,
               nav: true,
 
             responsive : {
                 // breakpoint from 0 up
                 0 : {
                     items: 1
                 },
                 // breakpoint from 480 up
                 480 : {
                     items: 2
                    
                 },
                 // breakpoint from 768 up
                 768 : {
                     items: 3
                     
                 }
             }
           });

    //Carousel testimonios

    $(".owl-testimonials").owlCarousel({
               items: 1, 
               autoplay: true,
               nav: true
    });

    //Carousel clientes
    $(".owl-clientes").owlCarousel({
               items: 6, 
               autoplay: true,
               nav: false,
                responsive : {
                 // breakpoint from 0 up
                 0 : {
                     items: 1
                 },
                 // breakpoint from 480 up
                 480 : {
                     items: 2
                    
                 },
                 // breakpoint from 768 up
                 768 : {
                     items: 6
                     
                 }
             }
    });

    //Carousel afiliados

    $(".owl-afiliados").owlCarousel({
               items: 6, 
               autoplay: true,
               nav: false,
                responsive : {
                 // breakpoint from 0 up
                 0 : {
                     items: 1
                 },
                 // breakpoint from 480 up
                 480 : {
                     items: 2
                    
                 },
                 // breakpoint from 768 up
                 768 : {
                     items: 6
                     
                 }
             }
    });
 
 
     $('.owl-prev').html('<i class="fas fa-chevron-circle-left"></i>');
     $('.owl-next').html('<i class="fas fa-chevron-circle-right"></i>');


     //Menu sroll

      $(window).on('scroll', function(){
         // aca se pregunta si el scroll se movio de pa bajo.
            if ($(this).scrollTop() > 250) {
              // esta parte cambia el atributo "src" de la etiqueta "img" 
              $('.div_menu_principal').addClass('bg_dark');
              $('.img_brand_navbar').addClass('resize');
             
            }
            if ($(this).scrollTop() < 250) {
               $('.div_menu_principal').removeClass('bg_dark');
               $('.img_brand_navbar').removeClass('resize');

            }
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
// disparador del contador sección QUIENES SOMOS del Home
$(window).scroll(startCounter);
function startCounter() {
var hT = $('.tag_numero_contadores').offset().top,
      hH = $('.tag_numero_contadores').outerHeight(),
      wH = $(window).height();
    if ($(window).scrollTop() > hT+hH-wH) {
        $(window).off("scroll", startCounter);
        $('.tag_numero_contadores').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}

// disparador del slider Digital agency
// $(window).scroll(startAnimation);
// function startAnimation() {
// var hT = $('.tag_titulo_secciones.tag_titulo_secciones_black.text-center').offset().top,
//       hH = $('.tag_titulo_secciones.tag_titulo_secciones_black.text-center').outerHeight(),
//       wH = $(window).height();
//     if ($(window).scrollTop() > hT+hH-wH) {
//         $(window).off("scroll", startAnimation);
//         $('.tag_titulo_secciones.tag_titulo_secciones_black.text-center').scroll(function () {
//             var animation_name = 'itemUno itemDos itemTres';
//             $('.tag_titulo_secciones.tag_titulo_secciones_black.text-center').scroll(function(){
//                 $(this).addClass(animation_name);
//             });
        
//             $('.tag_titulo_secciones.tag_titulo_secciones_black.text-center').scroll(function(){
//                 $(this).removeClass(animation_name);
//             });
//         });
//     }
// }

// Activate or inactivate class and color in servicios section
// TRAINING
$('.div_item_servicios.position_relative.training').click(function() {
    $('.col-12.col-lg-6.able').removeClass('able').addClass('disabled');
    $('.col-12.col-lg-6.training').addClass('able');
    $('.div_item_servicios.position_relative.active').removeClass('active');
    $('.div_item_servicios.position_relative.training').addClass('active');
    $('.triangulo_item_servicios.active').removeClass('active');
    $('.triangulo_item_servicios.training').addClass('active');
});
// DIGITAL
$('.div_item_servicios.position_relative.digital').click(function() {
    $('.col-12.col-lg-6.able').removeClass('able').addClass('disabled');
    $('.col-12.col-lg-6.digital').addClass('able');
    $('.div_item_servicios.position_relative.active').removeClass('active');
    $('.div_item_servicios.position_relative.digital').addClass('active');
    $('.triangulo_item_servicios.active').removeClass('active');
    $('.triangulo_item_servicios.digital').addClass('active');
});
// PROMOCIONAL
$('.div_item_servicios.position_relative.promocional').click(function() {
    $('.col-12.col-lg-6.able').removeClass('able').addClass('disabled');
    $('.col-12.col-lg-6.promocional').addClass('able');
    $('.div_item_servicios.position_relative.active').removeClass('active');
    $('.div_item_servicios.position_relative.promocional').addClass('active');
    $('.triangulo_item_servicios.active').removeClass('active');
    $('.triangulo_item_servicios.promocional').addClass('active');
});
// PRINTING
$('.div_item_servicios.position_relative.printing').click(function() {
    $('.col-12.col-lg-6.able').removeClass('able').addClass('disabled');
    $('.col-12.col-lg-6.printing').addClass('able');
    $('.div_item_servicios.position_relative.active').removeClass('active');
    $('.div_item_servicios.position_relative.printing').addClass('active');
    $('.triangulo_item_servicios.active').removeClass('active');
    $('.triangulo_item_servicios.printing').addClass('active');
});
