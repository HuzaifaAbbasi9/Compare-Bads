<?php include "header.php" ?>
    <link rel="stylesheet" href="assets/css/custom.css">
    <main class="main main-test">
        <section class="header-pagination">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-pagination-inner">
                            <a class="font6" href="index.php">Home</a>
                            <span><img src="assets/images/pagination-icon.png" alt=""></span>
                            <span class="font6">Search</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container checkout-container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li>
                    <a href="cart.php">Shopping Cart</a>
                </li>
                <li>
                    <a href="checkout.php">Checkout</a>
                </li>
                <li class="active">
                    <a href="order-complete.php">Order Complete</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-12">
                    <div class="thank-you-popup">
                        <img src="assets/images/correct.png" alt="">
                        <div>
                            <h4>Thank you</h4>
                            <p class="mb-0">Your order has been received</p>
                        </div>
                    </div>
                    <div class="row order-details-outer">
                        <div class="col-lg-2 col-md-3 order-details">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 order-details">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 order-details">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 order-details">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 order-details">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                        <div class="col-lg-2 col-md-3 order-details border-right-0">
                            <p>Lorem ipsum</p>
                            <h4> dolor sit amet,</h4>
                        </div>
                    </div>
                    <p class="mb-lg-5 mb-4">pay on cash upon delivery</p>
                    <h4 class="text-uppercase">order details</h4>
                    <div class="order-summary">
                        <h3>YOUR ORDER</h3>
                        <table class="table table-mini-cart checkout-wrapper">
                            <thead>
                            <tr>
                                <th colspan="2">Product</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-col">
                                    <h3 class="product-title">
                                        Circled Ultimate 3D Speaker
                                        <span class="product-qty d-block">soft double</span>
                                    </h3>
                                </td>
                                <td class="price-col text-right">
                                    <span>$1,040.00</span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="cart-subtotal">
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                <td class="price-col  text-right">
                                    <span>$1,458.00</span>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td class="text-right">
                                    <b class="total-price"><span>$1,603.80</span></b>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="mb-3"></div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>