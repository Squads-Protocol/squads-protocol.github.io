$(document).ready(function () {
    var splideNews = new Splide( '.splide-feedback', {
        type   : 'loop',
        pagination: false,
        perMove: 1,
        perPage: 6,
        autoWidth: true,
        autoScroll: {
            speed: 1.5,
        },
        breakpoints: {
            767: {
                perPage: 1,
                perMove: 1,
                autoWidth: true,
                autoScroll: {
                    speed: 1,
                },
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
