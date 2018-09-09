(function ($) {
    $(document).ready(function () {
        $(window).scroll(function () {
            var navTopBar = $('.nav-posts')
    
            console.log(1)
    
            if (window.pageYOffset > navTopBar.offsetTop) {
                navTopBar[0].classList.add("nav-posts--sticky");
            } else {
                navTopBar[0].classList.remove("nav-posts--sticky");
            }
        })
    })
}(jQuery))