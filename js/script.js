$(document).ready(function () {

    // toggle menu
    $('.section-header .btn-toggle_menu').click(function (data) {
        var menuList = []
        $('.section-header .header-navigation__list li').each(function () {
            var menuItem = $(this).find('a').text();
            var menuItemAttr = $(this).find('a').attr('href');
            menuList.push({name: menuItem, attr: menuItemAttr});
        });

        var html = `
        <div class="mobile-navigation">
            <div class="container-row">
                <nav class="mobile-navigation-container">
                    <ul class="mobile-navigation__list">`;
                    for (var i in menuList) {
                        html += `<li class="mobile-navigation__item"><a href="`+menuList[i].attr+`" class="mobile-navigation__link">`+menuList[i].name+`</a></li>`
                    }
            html += `</ul>
                </nav>
                
                <div class="mobile-event">
                    <a href="https://v3.squads.so/" target="_blank" class="btn-launch-app">
                        <div class="box-ratio">
                            <div class="content">
                                <div class="box-container">
                                    <p class="title">Launch App</p>
                                    <i class="icon arrow-diagonally"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="mobile-design-elements">
                    <i class="icon plus icon-top-left"></i>
                    <i class="icon plus icon-top-right"></i>
                    <i class="icon plus icon-bottom-left"></i>
                    <i class="icon plus icon-bottom-right"></i>
                </div>
                
            </div>
        </div>`;

        if ( $('.mobile-navigation').length < 1 ) {
            $('body').append(html);
        }

        if ( $('.mobile-navigation').hasClass('open') ) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }

        $('.mobile-navigation__link').on("click", function(e){
//            e.preventDefault();
            var anchor = $(this).attr('href');
            $('html, body').stop().animate({
                scrollTop: $(anchor).offset().top - 120
            }, 800);
            closeMobileMenu();
        });
    })
    $('.clickHref').click(function(){
        clickHref($(this).data('href'));
    });

    $(".btn_animate").click(function (){
        document.location = "https://based.squads.so/";
    });
});

// open mob menu
function openMobileMenu() {
    $('body').addClass('noScroll')
    setTimeout( function () {
        $('.mobile-navigation').addClass('open');
        $('.section-header .btn-toggle_menu').addClass('open');
    }, 10)
}

// close mob menu
function closeMobileMenu() {
    $('body').removeClass('noScroll')
    $('.mobile-navigation').removeClass('open');
    $('.section-header .btn-toggle_menu').removeClass('open');
}

function clickHref(href){
    var hrefs = {
        'MagicEden':'https://docs.squads.so/squads-v3-docs/integrations/magic-eden',
        'Cardinal':'https://docs.squads.so/squads-v3-docs/integrations/cardinal',
        'Bonfida':'https://docs.squads.so/squads-v3-docs/integrations/bonfida',
        'Dialect':'https://docs.squads.so/squads-v3-docs/integrations/dialect',
        'Jupiter':'https://docs.squads.so/squads-v3-docs/integrations/jupiter',
        'Stakewiz':'https://docs.squads.so/squads-v3-docs/integrations/staking/stakewiz',
        'Explorer':'https://docs.squads.so/squads-v3-docs/navigating-your-squad/owners-and-settings',
        'twitterStepan':'https://twitter.com/SimkinStepan',
        'twitterDeni':'https://twitter.com/deni_ersht',
        'twitterSean':'https://twitter.com/gansersol',
        'jito':'https://docs.squads.so/squads-v3-docs/integrations/staking/jitosol',
        'deadgods':'https://docs.squads.so/squads-v3-docs/integrations/staking/deadgods'
    };
    window.open(hrefs[href], '_blank');
}