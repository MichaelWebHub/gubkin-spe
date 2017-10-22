$(document).ready(function () {
    var article_width = $('.article').width();
    $('.article').css({
        'height': article_width / 2 + 'px'
    });

    $('.aside-menu-li').css({
        'line-height': $('.aside-menu-li').height() + 'px',
    })
})

$(window).resize(function () {
    var article_width = $('.article').width();
    $('.article').css({
        'height': article_width / 2 + 'px'
    });

    $('.aside-menu-li').css({
        'line-height': $('.aside-menu-li').height() + 'px'
    })

    if (window.innerWidth > 800) {
        $('.small-mobile-nav').css('display', 'none');
    }
})

$('.toggle-mobile-menu').click(function () {
    $('.small-mobile-nav').toggle(0, '.hide');
});
