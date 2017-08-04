//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {

          $(".navbar-brand img").removeClass("logo_teuben", 'slow');
          $(".navbar-brand img").removeClass("logo_teuben", 'slow');

    } else {
        $(".navbar-brand img").addClass("logo_teuben", 'slow');
        $(".navbar-brand img").addClass("logo_teuben1", 'slow');
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
