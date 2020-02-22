$(document).ready(function () {

    if (sessionStorage.basket === undefined || sessionStorage.basket === "") {
        $("#basket").text("Basket")
    } else {
        let basketCount = getBasket().length;

        //Display the amount of items in our basket in the navigation bar
        $("#Basket").text("Basket (" + basketCount + ")");
    }

    // MAIN PAGE SLIDER FOR FEATURED PRODUCTS
    $('.featured-slide').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });

    // PRODUCT PAGE SLIDER FOR PRODUCT IMAGE PREVIEW
    $('.product-slide').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
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

    // SHOW AND HIDE LOGIN/REGISTER FORMS
    $("#customerRegisterForm").hide();

    $("#showRegisterForm").click(function () {
        $("#customerRegisterForm").toggle();
        $("#customerLoginForm").toggle();
    });

    $("#showLoginForm").click(function () {
        $("#customerRegisterForm").toggle();
        $("#customerLoginForm").toggle();
    });

    //If the user is already logged in, redirect them to end_session file to log them out when logout button is clicked
    $("#account-status").click(function () {
        location.href = "../mongoDbHandlers/end_session.php";
    });

    console.log("Index Ready")
});

let products = [];

//Displays basket in page.
function loadBasket() {
    let basket = getBasket();//Load or create basket

    //Build a html string
    let htmlStr = "<form action='./checkout.php' method='post'>";
    let totalPrice = 0;
    let totalQuantity = 0;
    // Check  if there is a basket session storage
    if (basket.length > 0) {
        // Iterate over the basket to get the elements
        for (let i = 0; i < basket.length; ++i) {
            // Get each element value during iteration
            htmlStr += "<div class=\"cart-product-container\">\n" +
                "        <table style=\"width: 100%\">\n" +
                "            <thead class=\"table-header\">\n" +
                "            <tr>\n" +
                "                <th class=\"col-12\" scope=\"col\"><span>Item</span></th>\n" +
                "                <th class=\"col-11\" scope=\"col\"><span>Price</span></th>\n" +
                "                <th class=\"col-10\" scope=\"col\"><span>Quantity</span></th>\n" +
                "                <th class=\"col\" scope=\"col\"><span>Total</span></th>\n" +
                "            </tr>\n" +
                "            </thead>\n" +
                "            <tbody>\n" +
                "            <tr>\n" +
                "                <td class=\"col\">\n" +
                "                    <div class=\"product-photo\">\n" +
                "                        <img src=\"upload/" + basket[i].fileName + "\" width=\"150px\" height=\"auto\">\n" +
                "                    </div>\n" +
                "                    <div class=\"product-details\">\n" +
                "                        <p><strong>" + basket[i].name + "</strong></p>\n" +
                "                        <strong>Selected Size: </strong><span>" + basket[i].size + "</span>\n" +
                "                    </div>\n" +
                "                <td class=\"price-qty-total col\">\n" +
                "                    <span><strong>£" + basket[i].price + "</strong</span>\n" +
                "                </td>\n" +
                "                <td class=\"price-qty-total col\">\n" +
                "                    <span><strong>" + basket[i].quantity + "</strong</span>\n" +
                "                </td>\n" +
                "                <td class=\"price-qty-total col\">\n" +
                "                    <span><strong>£" + (basket[i].quantity * basket[i].price) + "</strong</span>\n" +
                "                </td>\n" +
                "            </tr>\n" +
                "            </tbody>\n" +
                "        </table>\n" +
                "    </div>";

            // Add price and quantity together
            totalPrice += basket[i].quantity * basket[i].price;
            totalQuantity += basket[i].quantity;
            // Round the price to nearest 2 decimals.
            var roundedPrice = Math.round((totalPrice + Number.EPSILON) * 100) / 100;

            // Add new product to the array
            products.push({
                id: basket[i].id,
                name: basket[i].name,
                size: basket[i].size,
                quantity: basket[i].quantity,
                type: basket[i].type,
                color: basket[i].color,
                price: basket[i].price,
                fileName: basket[i].fileName
            });
        }
        //Build string html
        htmlStr += "<div class=\"cart-summary-container\">\n" +
            "        <div class=\"cart-summary-wrapper\">\n" +
            "            <h4>SUMMARY</h4>\n" +
            "\n" +
            "            <div class=\"row\">\n" +
            "                <div class=\"col-sm-6\">\n" +
            "                    <p>Total Quantity: </p>\n" +
            "                </div>\n" +
            "                <div class=\"col-sm-6 summary-right-values\">\n" +
            "                    <span>" + totalQuantity + "</span>\n" +
            "                </div>\n" +
            "            </div>\n" +
            "\n" +
            "            <div class=\"row total-price\">\n" +
            "                <div class=\"col-sm-6\">\n" +
            "                    <p style=\"font-weight: bold\">Total: </p>\n" +
            "                </div>\n" +
            "                <div class=\"col-sm-6 summary-right-values\">\n" +
            "                    <span style=\"font-weight: bold\">£" + roundedPrice + "</span>\n" +
            "                </div>\n" +
            "            </div>\n" +
            "\n" +
            "            <div class=\"checkout-btns\">\n" +
            "                <a href=\"checkout.php\">\n" +
            "                    <button value='CHECKOUT' type='submit'>Checkout</button>\n" +
            "<button onclick='emptyBasket();' style='margin-top: 10px;'>Empty Basket</button>" +
            "                </a>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>";

        // htmlStr += "<button onclick='emptyBasket();' style='margin: 20px;'>Empty Basket</button>";
    } else {
        htmlStr += "<div class=\"container\">\n" +
            "    <h4>YOUR BASKET IS EMPTY</h4>\n" +
            "</div>"
    }
    htmlStr += "<input type='hidden' name='products' value='" + JSON.stringify(products) + "'>";
    htmlStr += "</form>";

    //Add our built html string under this element
    document.getElementById("basketDiv").innerHTML = htmlStr;
}

// Empties the session storage when it's called
function emptyBasket() {
    sessionStorage.clear();
    loadBasket();
    $("#Basket").text("Basket");
}

// Get the data inside our session storage
function getBasket() {
    let basket;
    if (sessionStorage.basket === undefined || sessionStorage.basket === "") {
        basket = [];
    } else {
        basket = JSON.parse(sessionStorage.basket);
    }
    return basket;
}

// Adds the product to the session storage when it's called.
function addToBasket(prodId, prodName) {
    let basket = getBasket();
    let selectedSize = $("#shoeSize").val();
    let shoeQuantity = $("#shoeQuantity").val();
    let type = $("#type").val();
    let color = $("#color").val();
    let price = $("#price").val();
    let fileName = $("#fileName").val();
    // Get the session storage JSON and parse it to access the elements as an array
    let getSession = JSON.parse(sessionStorage.getItem("basket"));
    // Check if we got a session storage called basket
    if (sessionStorage["basket"]) {
        // iterate over the session storage elements
        for (let element of getSession) {
            // Check if the product name and size is already inside our session to avoid duplication
            if (element.name === prodName && parseInt(element.size) === parseInt(selectedSize)) {

                // Add product details to our session storage
                element._id = prodId;
                element.name = prodName;
                element.size = selectedSize;
                element.quantity = element.quantity + parseInt(shoeQuantity);
                // Update new session storage with the new product details
                let updateObj = JSON.stringify(getSession);
                // Send the newly created session storage to our session storage replacing it
                sessionStorage.setItem("basket", updateObj);
                // break the loop
                return;
            }
        }
    }

    // Add product to basket
    basket.push({
        _id: prodId,
        name: prodName,
        size: parseInt(selectedSize),
        quantity: parseInt(shoeQuantity),
        type: type,
        color: color,
        price: price,
        fileName: fileName
    });

    // Store in session storage
    sessionStorage.basket = JSON.stringify(basket);

    //Display the amount of items in our basket in the navigation bar
    $("#Basket").text("Basket (" + (getSession.length + 1) + ")");

    //Display basket in page.
    // alert("Added to basket -> Size: " + JSON.parse(sessionStorage.basket).length);
}