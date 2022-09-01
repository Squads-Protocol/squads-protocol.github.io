$(document).ready(function () {
    var splideNews = new Splide( '.splide-feedback', {
        type   : 'loop',
        pagination: false,
        autoWidth: true,
        perMove: 1,
        autoScroll: {
            speed: 1.5,
        },
        breakpoints: {
            0: {
                perPage: 1,
            },
            767: {
                perPage: 1,
                autoWidth: false,
            }
        },
        classes: {
            arrows: 'control-panel-btn',
            arrow : 'splide__arrows',
            prev  : 'splide__arrow--prev',
            next  : 'splide__arrow--next',
        },
    });
    splideNews.mount( window.splide.Extensions );
});
