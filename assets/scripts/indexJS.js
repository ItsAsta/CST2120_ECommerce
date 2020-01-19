$(document).ready(function () {

    $('.featured-slide').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots:true,
        autoplay:true,
        autoplaySpeed: 3000
    });
    console.log("Index Ready")
});