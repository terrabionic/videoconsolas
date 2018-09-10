$(document).ready(function () {

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

})