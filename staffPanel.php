<?php
include_once('inc/phpFunc.php');
headerOutput('Men', array("assets/styles/stylesheet.css", "assets/styles/bootstrap.css", "assets/slick/slick.css", "assets/slick/slick-theme.css"));
navigationOutput('Staff Panel');
?>

<div class="container-fluid">
<!--  CSM LEFT NAVIGATION FOR SECTIONS  -->
    <div class="csm-navigation">
        <button id="viewOrdersBtn" type="button" class="dark-btn" style="letter-spacing: 2px">View Orders</button>
        <button id="viewProductsBtn" type="button" class="dark-btn" style="letter-spacing: 2px">View Products</button>
        <button id="addProductBtn" type="button" class="dark-btn" style="letter-spacing: 2px">Add Product</button>
    </div>

<!--  CSM ORDER HISTORY  -->
    <div class="csm-content-container">
        <h4 id="csmTitle">ORDER HISTORY</h4>
        <div id="orders">
            <table style="width: 100%">
                <thead class="table-header">
                <tr>
                    <th class="col-12" scope="col"><span>Order ID</span></th>
                    <th class="col-11" scope="col"><span>Date</span></th>
                    <th class="col-10" scope="col"><span>Total</span></th>
                    <th class="col-10" scope="col"><span>MGM</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col">
                        <p>OI23490694368435</p>
                    <td class="price-qty-total col">
                        <strong>21/05/2019</strong>
                    </td>
                    <td class="price-qty-total col">
                        <strong>£144.99</strong>
                    </td>
                    <td class="price-qty-total col">
                        <button class="dark-btn" style="padding: 1px; width: 100px">REMOVE</button>
                        <button class="dark-btn" style="padding: 1px; width: 100px">VIEW</button>
                    </td>
                </tr>
                <tr>
                    <td class="col">
                        <p>OI95299881982236</p>
                    <td class="price-qty-total col">
                        <strong>22/05/2019</strong>
                    </td>
                    <td class="price-qty-total col">
                        <strong>£144.99</strong>
                    </td>
                    <td class="price-qty-total col">
                        <button class="dark-btn" style="padding: 1px; width: 100px">REMOVE</button>
                        <button class="dark-btn" style="padding: 1px; width: 100px">VIEW</button>
                    </td>
                </tr>
                <tr>
                    <td class="col">
                        <p>OI148514832951413</p>
                    <td class="price-qty-total col">
                        <strong>27/05/2019</strong>
                    </td>
                    <td class="price-qty-total col">
                        <strong>£144.99</strong>
                    </td>
                    <td class="price-qty-total col">
                        <button class="dark-btn" style="padding: 1px; width: 100px">REMOVE</button>
                        <button class="dark-btn" style="padding: 1px; width: 100px">VIEW</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

<!--  CSM AVAILABLE PRODUCTS  -->
        <div id="products">
            <table style="width: 100%">
                <thead class="table-header">
                <tr>
                    <th class="col-12" scope="col"><span>Product Name</span></th>
                    <th class="col-11" scope="col"><span>Quantity</span></th>
                    <th class="col-10" scope="col"><span>Price</span></th>
                    <th class="col-10" scope="col"><span>MGM</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col">
                        <div class="product-photo">
                            <img src="assets/resources/male_nike_airmax_97_red_black.jpg" width="150px"
                                 height="auto">
                        </div>
                        <div class="product-details">
                            <strong>Nike Air Max 97 Red/Black</strong>
                        </div>
                    <td class="price-qty-total col">
                        <strong>35</strong>
                    </td>
                    <td class="price-qty-total col">
                        <strong>£144.99</strong>
                    </td>
                    <td class="price-qty-total col">
                        <button class="dark-btn" style="padding: 1px; width: 100px">REMOVE</button>
                        <button class="dark-btn" style="padding: 1px; width: 100px">EDIT</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

<!--  CSM ADD NEW PRODUCT  -->
        <div id="addProduct">
            <div class="col-lg">
                <div class="row">
                    <input class="col-5" type="text" placeholder="Product Name">
                    <textarea class="col-3" placeholder="Sizes available separate by (,)"></textarea>
                    <input class="col-3" type="number" placeholder="Amount in stock">
                </div>
                <div class="row">
                    <textarea class="col" style="height: 150px" placeholder="Product description"></textarea>
                </div>
                <button class="dark-btn">ADD PRODUCT</button>
            </div>
        </div>
    </div>
</div>
