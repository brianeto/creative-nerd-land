$(document).ready(function(){
    $(".owl-team").owlCarousel({
               items: 2,
               autoplay: false,
               nav: true,

             responsive : {
                 // breakpoint from 0 up
                 0 : {
                     items: 1,
                     autoplay: true
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
    // header
    $('.header .nav-link').click(function() {
        $('.nav-link').removeClass('link_active');
        $(this).addClass('link_active');
        
    });

    $('.header .btn_toggle').click(function() {
      $('.header .nav').slideToggle();
      $('.nav.flex-column.content_dropdown').css("display","none");
    }); 

    $('.item_dropdown.dropdown').click(function() {
      $('.content_dropdown').slideToggle();
    });


    //Carousel clientes
    $(".owl-clientes").owlCarousel({
               items: 5,
               autoplay: true,
               autoplayTimeout:1000,
               nav: false,
               loop: true,
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
                     items: 5

                 }
             }
    });

        //Smoothscroll
        $('html').smoothScroll(2000);
    //Carousel afiliados

    $(".owl-afiliados").owlCarousel({
               items: 6,
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
                     items: 6

                 }
             }
    });


     $('.owl-prev').html('<i class="fas fa-chevron-circle-left"></i>');
     $('.owl-next').html('<i class="fas fa-chevron-circle-right"></i>');

    
     $(document).ready(function () {
         if($(window).width() < 575) {
            $(".dropdown-item.digital").addClass("col-2");
            $(".dropdown-item.training").addClass("col-2");
            $(".dropdown-item.promocional").addClass("col-2");
            $(".dropdown-item.printing").addClass("col-2");
            $(".grid-icon").removeClass("col-2");
            $(".grid-icon").addClass("col-lg-1");
         }    
     });
     $(document).ready(function () {
        if($(window).width() < 575) {
           $(".dropdown-item.digital").addClass("col-2");
           $(".dropdown-item.training").addClass("col-2");
           $(".dropdown-item.promocional").addClass("col-2");
           $(".dropdown-item.printing").addClass("col-2");
           $(".grid-icon").removeClass("col-2");
           $(".grid-icon").addClass("col-lg-1");
        }    
    });

    // Menu background mobile
     $(window).on('scroll', function(){
        if($(window).width() < 575) {
         // aca se pregunta si el scroll se movio de pa bajo.
         if ($(this).scrollTop() > 250) {
            // esta parte cambia el atributo "src" de la etiqueta "img"
            $('.navbar-nav.ml-auto').css("background","none");
            $('.tag_enlace_menu').css("color","#000");
          }
          if ($(this).scrollTop() < 250) {
            $('.navbar-nav.ml-auto').css("background","white");
            $('.tag_enlace_menu').css("color","#000");
          }
         }    
      });

    //Pagina Digital agency slider trigger mobile
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        console.log(scroll);
        if ($(window).width() < 575) {
            if (scroll >= 90) {
                console.log(scroll);
                $(".carrusel.first").addClass("functional-carrusel");
            }
            if (scroll >= 900) {
                console.log(scroll);
                $(".carrusel.second").addClass("functional-carrusel");
            }
            if (scroll >= 1850) {
                console.log(scroll);
                $(".carrusel.third").addClass("functional-carrusel");
            }
            if (scroll >= 2970) {
                console.log(scroll);
                $(".carrusel.fourth").addClass("functional-carrusel");
            }
            if (scroll >= 4400) {
                console.log(scroll);
                $(".carrusel.fifth").addClass("functional-carrusel");
            }
        }
    });

     //Menu sroll
      $(window).on('scroll', function(){
         // aca se pregunta si el scroll se movio de pa bajo.
            if ($(this).scrollTop() > 250) {
              // esta parte cambia el atributo "src" de la etiqueta "img"
                $('.header').addClass('bg_dark');
                $('.img_brand_navbar').addClass('resize');

            }
            if ($(this).scrollTop() < 250) {
                $('.header').removeClass('bg_dark');
                $('.img_brand_navbar').removeClass('resize');

            }
      });
      //Pagina Digital agency slider trigger
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        console.log(scroll);
        if (scroll >= 400) {
            console.log(scroll);
            $(".carrusel.first").addClass("functional-carrusel");
        }
        if (scroll >= 1400) {
            console.log(scroll);
            $(".carrusel.second").addClass("functional-carrusel");
        }
        if (scroll >= 2100) {
            console.log(scroll);
            $(".carrusel.third").addClass("functional-carrusel");
        }
        if (scroll >= 3350) {
            console.log(scroll);
            $(".carrusel.fourth").addClass("functional-carrusel");
        }
        if (scroll >= 4500) {
            console.log(scroll);
            $(".carrusel.fifth").addClass("functional-carrusel");
        }
    });

    // disparador del contador sección QUIENES SOMOS de la pagina Home
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


    $('.digital-page .img_brand_navbar').on(function(){
        $(this).attr('src', 'image/logo-blanco.png');
    });
    $('.training-page .img_brand_navbar').on(function(){
        $(this).attr('src', 'image/logo-blanco.png');
    });
    $('.promocional-page .img_brand_navbar').on(function(){
        $(this).attr('src', 'image/logo-blanco.png');
    });
    $('.printing-page .img_brand_navbar').on(function(){
        $(this).attr('src', 'image/logo-blanco.png');
    });


      //SERVICIOS

      $('.btn-services').click(function(){
        $('.btn-services').removeClass('active');
        $(this).addClass('active');

        var category = $(this).attr('data-category');

        $('.item-services').removeClass('able');
        $('.item-services[id="'+category+'"]').addClass('able');
      });

    
      //PORTAFOLIO INDEX
      $('#seccion_portafolio .nav-link').click(function(){
        $('#seccion_portafolio .nav-link').removeClass('active');
        $(this).addClass('active');

        var categoryportafolio = $(this).attr('data-category-portafolio');

        $('.item-services-portafolio').removeClass('able-portafolio');
        $('.item-services-portafolio[id="'+categoryportafolio+'"]').addClass('able-portafolio');
      });

        //PORTAFOLIO PAGE
      $('.btn-portafolio').click(function(e){
          e.preventDefault();
        $('.btn-portafolio').removeClass('active');
        $(this).addClass('active');
        
        
        var itemCategory = $(this).attr('data-category-button');

        $('.item-portafolio-general').css('display','none');
        $('.item-portafolio-general[data-category-item="'+itemCategory+'"]').css('display','block');
        
        
      });
      $('.btn-portafolio[data-category-button="todo"]').click(function(e){
        $('.item-portafolio-general').css('display','block');
      
      
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


