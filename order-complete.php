<?php include "header.php" ?>
    <link rel="stylesheet" href="assets/css/custom.css">
    <main class="main main-test">
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
                <div class="col-lg-7">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Billing details</h2>
                            <form action="#" id="checkout-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="form-control" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control"/>
                                </div>
                                <div class="select-custom">
                                    <label>Country / Region
                                        <abbr class="required" title="required">*</abbr></label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected="selected">Vanuatu
                                        </option>
                                        <option value="1">Brunei</option>
                                        <option value="2">Bulgaria</option>
                                        <option value="3">Burkina Faso</option>
                                        <option value="4">Burundi</option>
                                        <option value="5">Cameroon</option>
                                    </select>
                                </div>
                                <div class="form-group mb-1 pb-2">
                                    <label>Street address
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" placeholder="House number and street name"
                                           required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           placeholder="Apartment, suite, unite, etc. (optional)" required/>
                                </div>
                                <div class="form-group">
                                    <label>Town / City
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" required/>
                                </div>
                                <div class="select-custom">
                                    <label>State / County <abbr class="required" title="required">*</abbr></label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected="selected">NY</option>
                                        <option value="1">Brunei</option>
                                        <option value="2">Bulgaria</option>
                                        <option value="3">Burkina Faso</option>
                                        <option value="4">Burundi</option>
                                        <option value="5">Cameroon</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Postcode / Zip
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Phone <abbr class="required" title="required">*</abbr></label>
                                    <input type="tel" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Email address
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="email" class="form-control" required/>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- End .col-lg-8 -->

                <div class="col-lg-5">
                    <div class="select-custom mt-lg-5">
                        <label class="side-bar-label">Delivery Options</label>
                        <select name="orderby" class="form-control">
                            <option value="" selected="selected">Select Delivery Option</option>
                            <option value="2">000</option>
                            <option value="3">000</option>
                            <option value="4">000</option>
                            <option value="5">000</option>
                        </select>
                    </div>
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
                            <tr>
                                <td class="product-col">
                                    <h3 class="product-title">
                                        Fashion Computer Bag
                                        <span class="product-qty d-block">soft double</span>
                                    </h3>
                                </td>

                                <td class="price-col text-right">
                                    <span>$418.00</span>
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
                            <tr class="order-shipping">
                                <td class="text-left" colspan="2">
                                    <h4 class="m-b-sm">Payment methods</h4>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="radio" checked/>
                                            <label class="custom-control-label">Cards</label>
                                            <img src="assets/images/cards.png" class="ml-auto" alt="">
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="radio" checked/>
                                            <label class="custom-control-label">Paypal</label>
                                            <img src="assets/images/paypal.png" class="ml-auto" alt="">
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="radio" checked/>
                                            <label class="custom-control-label">Finance</label>
                                            <img src="assets/images/klarna.png" class="ml-auto" alt="">
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="mb-3"></div>
                        <button type="submit" class="btn btn-dark btn-place-order w-100" form="checkout-form">
                            Place order
                        </button>
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </main>
    <!-- End .main -->
<?php include "footer.php" ?>