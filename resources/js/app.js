import 'owl.carousel'

$(document).ready(function(){
    const slider = $("#slider").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
    });
    const testimonials = $("#testimonials").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
    });
    const articles = $("#articles").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
    });
});
