// Boton de subir
$(document).ready(function() {

        $('.subir').click(function() {
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.subir').fadeIn(500);
            } else {
                $('.subir').fadeOut(500);
            }
        });
});
// fin de boton subir

if (page == 'inicio' && page != undefined) {
    $('#slide_hero').carousel({
        interval: 3500,
        pause: false
    });
    
    // Propiedades destacadas script
    if(cantidad_inmuebles == 1){
        setTimeout(() => {
            $('#owl_propiedades_destacadas').owlCarousel({
                loop:true,
                margin:30,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        }, 100);
    }else if(cantidad_inmuebles == 2){
        setTimeout(() => {
            $('#owl_propiedades_destacadas').owlCarousel({
                loop:true,
                margin:30,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    }
                }
            });
        }, 100);
    }else{
        setTimeout(() => {
            $('#owl_propiedades_destacadas').owlCarousel({
                loop:true,
                margin:30,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        }, 100);
    }
    //fin de propeidades destacadas script
    $('#aliados_slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
}