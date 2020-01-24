$('document').ready(function() {
    $('#searchToggle').on('click', function() {
        $('.search-container').toggle('slide');
    });
    if($('body').hasClass('page-template-default')) {
        $(window).on('scroll', function() {
            var winScroll = $(window).scrollTop();
            //var winHeight = $(window).height();
            if (winScroll >= 650){
                $('.site-header').parents('.home-container').removeClass('home-header');
            } else {
                console.log('not vis');
                $('.site-header').parents('.home-container').addClass('home-header');
            }
        });
    }
    if($('body').hasClass('page-about')) {
        $(window).on('scroll', function() {
            var winScroll = $(window).scrollTop();
            // var winHeight = $(window).height();
            if (winScroll >= 650){
                $('.site-header').parents('.about-page-container').removeClass('about-page-header');
            } else {
                console.log('not vis');
                $('.site-header').parents('.about-page-container').addClass('about-page-header');
            }
        });
    }
});