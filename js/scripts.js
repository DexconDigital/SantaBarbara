if (page == 'inicio') {
    $('#slide_hero').carousel({
        interval: 3500,
        pause: false
    })

    $('#aliados_slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
}