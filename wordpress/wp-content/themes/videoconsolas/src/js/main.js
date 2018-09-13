$(document).ready(function () {

    /* Top bar when scrolling */
    if ($('.nav-posts').length > 0) {
        $(window).scroll(function () {
            var navTopBar = $('.nav-posts'),
                header = $('.header')
    
            if (window.pageYOffset > header[0].offsetTop) {
                navTopBar[0].classList.add("nav-posts--sticky");
            } else {
                navTopBar[0].classList.remove("nav-posts--sticky");
            }
        })
    }

    /* Switch layout posts */
    if ($('.posts-list__switch-layout').length) {
        $('.posts-list__switch-layout').on('click touch', function () {
            if (!$(this).hasClass('posts-list__switch-layout--active')) {
                $('.posts-list__switch-layout').removeClass('posts-list__switch-layout--active')
                $(this).addClass('posts-list__switch-layout--active')

                if ($('.posts-list__switch-layout--grid').hasClass('posts-list__switch-layout--active')) {
                    $('.posts-list__entry').removeClass('posts-list__entry--large')
                }

                if ($('.posts-list__switch-layout--list').hasClass('posts-list__switch-layout--active')) {
                    $('.posts-list__entry').addClass('posts-list__entry--large')
                }
            }
        })
    }

})