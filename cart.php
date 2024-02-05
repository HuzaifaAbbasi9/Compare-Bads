<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/custom.css">
<main class="main">
    <div class="container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <a href="cart.php">Shopping Cart</a>
            </li>
            <li>
                <a href="checkout.php">Checkout</a>
            </li>
            <li>
                <a href="order-complete.php">Order Complete</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                        <tr>
                            <th class="thumbnail-col"></th>
                            <th class="product-col">Product</th>
                            <th class="price-col">Price</th>
                            <th class="qty-col">Quantity</th>
                            <th class="text-right">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="javascript:void(0)" class="product-image">
                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                    </a>

                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td class="product-col">
                                <h5 class="product-title">
                                    LuxuryCraft Mattress <br>
                                    <a href="javascript:void(0)">Men Watch</a>
                                </h5>
                            </td>
                            <td>$17.90</td>
                            <td>
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div><!-- End .product-single-qty -->
                            </td>
                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                        </tr>
                        <tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="javascript:void(0)" class="product-image">
                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                    </a>

                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td class="product-col">
                                <h5 class="product-title">
                                    LuxuryCraft Mattress <br>
                                    <a href="javascript:void(0)">Men Watch</a>
                                </h5>
                            </td>
                            <td>$17.90</td>
                            <td>
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div><!-- End .product-single-qty -->
                            </td>
                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                        </tr>
                        <tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="javascript:void(0)" class="product-image">
                                        <img src="assets/images/products/product-6.jpg" alt="product">
                                    </a>

                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td class="product-col">
                                <h5 class="product-title">
                                    LuxuryCraft Mattress <br>
                                    <a href="javascript:void(0)">Men Black Gentle Belt</a>
                                </h5>
                            </td>
                            <td>$17.90</td>
                            <td>
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div><!-- End .product-single-qty -->
                            </td>
                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" class="clearfix">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-shop btn-update-cart">
                                        Update Cart
                                    </button>
                                </div><!-- End .float-right -->
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- End .cart-table-container -->
            </div>
            <!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>CART TOTALS</h3>

                    <table class="table table-totals">
                        <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>$17.90</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td>Total</td>
                            <td>$17.90</td>
                        </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="checkout.php" class="btn btn-block btn-dark">Proceed to Checkout
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- End .cart-summary -->
            </div>
            <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
    <div class="mb-6"></div>
    <!-- margin -->
</main>
<!-- End .main -->
<?php include "footer.php" ?>
