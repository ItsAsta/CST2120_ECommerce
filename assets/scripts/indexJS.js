$(document).ready(function () {

    // MAIN PAGE SLIDER FOR FEATURED PRODUCTS
    $('.featured-slide').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots:true,
        autoplay:true,
        autoplaySpeed: 3000
    });

    // PRODUCT PAGE SLIDER FOR PRODUCT IMAGE PREVIEW
    $('.product-slide').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        autoplay:true,
        autoplaySpeed: 3000,
    });

    // HIDE PRODUCT AND ADD NEW PRODUCT SECTION UPON INITIALISATION.
    $("#products").hide();
    $("#addProduct").hide();

    // HIDE EVERYTHING BESIDES THE ORDER HISTORY SECTION FOR DISPLAY
    $("#viewOrdersBtn").click(function () {
        $("#csmTitle").text("ORDER HISTORY");
        $("#orders").show();
        $("#products").hide();
        $("#addProduct").hide();
    });

    // HIDE EVERYTHING BESIDES THE PRODUCTS SECTION FOR DISPLAY
    $("#viewProductsBtn").click(function () {
        $("#csmTitle").text("PRODUCTS");
        $("#products").show();
        $("#orders").hide();
        $("#addProduct").hide();
    });

    // HIDE EVERYTHING BESIDES THE PRODUCT ADDING SECTION FOR DISPLAY
    $("#addProductBtn").click(function () {
        $("#csmTitle").text("ADD PRODUCT");
        $("#products").hide();
        $("#orders").hide();
        $("#addProduct").show();
    });

    console.log("Index Ready")
});