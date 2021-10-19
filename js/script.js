$(document).ready(function () {

    let widthWindow = $(window).width();

    function toggleMenu() {
        if ($(this).width() <= 800) {
            $('footer .toggle_menu').each(function () {
                $(this).find('.accordion').hide();
                $('footer .toggle_menu').find('i.icon').removeClass('minus').addClass('plus')
            })
        } else {
            $('footer .toggle_menu').each(function () {
                $(this).find('.accordion').show();
            })

            $('footer .toggle_menu').click(function () {
                event.stopPropagation()
            })
        }
    }

    $('footer .toggle_menu').click(function () {
        if ( $(window).width() <= 800) {
            $(this).toggleClass('active')
            $(this).each( function () {
                if ( $(this).hasClass('active') ) {
                    $(this).find('.accordion').slideDown('fast');
                    $(this).find('i.icon').removeClass('plus').addClass('minus')
                } else {
                    $(this).removeClass('active').find('.accordion').slideUp('fast');
                    $(this).find('i.icon').removeClass('minus').addClass('plus')
                }
            })
        }
    })

    toggleMenu()

    $(window).on('resize', function () {
        toggleMenu()
    })

    $('a[href^="#"]').click(function(){
        let anchor = $(this).attr('href');
        $('html, body').animate({
            scrollTop:  $(anchor).offset().top
        }, 600);
    });

})




