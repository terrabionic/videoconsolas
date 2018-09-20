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

    /* Burger button */
    $('.header__burger-btn').on('click touched', function (e) {
        $(this).toggleClass('header__burger-btn--opened')
        $('.mobile-menu').toggleClass('mobile-menu--opened')

        if ($(this).hasClass('header__burger-btn--opened')) {
            $('html, body').css({
                overflow: 'hidden',
                height: '100%'
            })
        } else {
            $('html, body').css({
                overflow: 'auto',
                height: 'auto'
            });
        }
    })

    /* Mobile menu item */
    $('.mobile-menu__item.menu-item-has-children').css({'height': $('.mobile-menu__item').innerHeight()})
    $('.mobile-menu__item.menu-item-has-children').attr('data-height', $('.mobile-menu__item').innerHeight())
    $('.mobile-menu__item.menu-item-has-children').on('click touched', function (e) {
        $(this).toggleClass('mobile-menu__item--opened')

        var itemHeight = $(this).innerHeight()
        var submenuHeight = $(this).find('ul').innerHeight() + 16

        if ($(this).hasClass('mobile-menu__item--opened')) {
            $(this).animate({'height': (itemHeight + submenuHeight)})
        } else {
            $(this).animate({'height': $(this).attr('data-height')})
        }
    })

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