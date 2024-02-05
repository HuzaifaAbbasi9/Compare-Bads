<?php include "header.php" ?>
<link rel="stylesheet" href="assets/css/my-account.css">
<link rel="stylesheet" href="assets/css/custom.css">
<main class="main">
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
    <div class="container account-container custom-account-container">
        <h2 class="text-center mb-4 mb-lg-5">My Account</h2>
        <div class="row">
            <div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
                <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link account-nav-link active" id="dashboard-tab" data-toggle="tab"
                           href="#dashboard"
                           role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
                           aria-controls="order" aria-selected="true">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link account-nav-link" id="address-tab" data-toggle="tab" href="#address"
                           role="tab"
                           aria-controls="address" aria-selected="false">Addresses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link account-nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab"
                           aria-controls="edit" aria-selected="false">Account
                            details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 order-lg-last order-1 tab-content">
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                    <div class="dashboard-content">
                        <h3 class="account-sub-title d-none d-md-block"><i
                                    class="sicon-social-dropbox align-middle mr-3"></i>DASHBOARD</h3>
                        <div class="mb-4"></div>

                        <div class="row row-lg">
                            <div class="col-6 col-md-6">
                                <div class="feature-box text-center pb-4">
                                    <a href="#order" class="link-to-tab"><i
                                                class="sicon-social-dropbox"></i></a>
                                    <div class="feature-box-content">
                                        <h3>ORDERS</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="feature-box text-center pb-4">
                                    <a href="#address" class="link-to-tab"><i
                                                class="sicon-location-pin"></i></a>
                                    <div class="feature-box-content">
                                        <h3>ADDRESSES</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="feature-box text-center pb-4">
                                    <a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
                                    <div class="feature-box-content p-0">
                                        <h3>ACCOUNT DETAILS</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="feature-box text-center pb-4">
                                    <a href="login.html"><i class="sicon-logout"></i></a>
                                    <div class="feature-box-content">
                                        <h3>LOGOUT</h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .row -->
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="order" role="tabpanel">
                    <div class="order-content">
                        <h3 class="account-sub-title d-none d-md-block"><i
                                    class="sicon-social-dropbox align-middle mr-3"></i>Orders</h3>
                        <div class="order-table-container text-center">
                            <table class="table table-order text-left">
                                <thead>
                                <tr>
                                    <th class="order-id">ORDER</th>
                                    <th class="order-date">DATE</th>
                                    <th class="order-status">STATUS</th>
                                    <th class="order-price">TOTAL</th>
                                    <th class="order-action text-md-right">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mibed Mattress</td>
                                    <td>27-06-2022</td>
                                    <td><strong>Pending</strong></td>
                                    <td><strong>Pending</strong></td>
                                    <td class="text-md-right"><a class="nav-link link-to-tab order-details-link"
                                                                 id="order-tab"
                                                                 data-toggle="tab"
                                                                 href="#order-details" role="tab"
                                                                 aria-controls="order" aria-selected="true">View
                                            Order</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--                            <hr class="mt-0 mb-3 pb-2"/>-->
                            <!--                            <a href="category.php" class="btn btn-dark">Go Shop</a>-->
                        </div>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="order-details" role="tabpanel">
                    <div class="order-content">
                        <h3 class="account-sub-title d-none d-md-block"><i
                                    class="sicon-social-dropbox align-middle mr-3"></i>ORDERS DETAILS</h3>
                        <div class="order-table-container order-details-table-container text-center">
                            <table class="table table-order text-left">
                                <thead>
                                <tr>
                                    <th class="order-id">PRODUCTS</th>
                                    <th class="order-action">TOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mibed Mattress Double x 1</td>
                                    <td>£245</td>
                                </tr>
                                <tr>
                                    <td>Mibed Mattress Double x 1</td>
                                    <td>£245</td>
                                </tr>
                                <tr>
                                    <td>Mibed Mattress Double x 1</td>
                                    <td>£245</td>
                                </tr>
                                <tr>
                                    <td>Mibed Mattress Double x 1</td>
                                    <td>£245</td>
                                </tr>
                                <tr>
                                    <td>Mibed Mattress Double x 1</td>
                                    <td>£245</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <th>Total:</th>
                                <th>£4245</th>
                                </tfoot>
                            </table>
                            <!--                            <hr class="mt-0 mb-3 pb-2"/>-->
                            <!--                            <a href="category.php" class="btn btn-dark">Go Shop</a>-->
                        </div>

                        <h3 class="account-title mt-lg-5 mt-4">BILLING ADDRESS</h3>
                        <div>
                            <p class="mb-1">John Doe</p>
                            <p class="mb-1">The City Mall</p>
                            <p class="mb-1">Pakistan</p>
                            <p class="mb-1">Jupitor Road, Near Mars Galaxy</p>
                            <p class="mb-1">Islamabad</p>
                            <p class="mb-1">Punjab</p>
                            <p class="mb-1">46000</p>
                            <p class="mb-1">+92 900 78601 </p>
                            <p class="mb-1">johndoe@gmail.com</p>
                            <p class="mb-1">Bronze</p>
                        </div>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="order" role="tabpanel">
                    <div class="order-content">
                        <h3 class="account-sub-title d-none d-md-block"><i
                                    class="sicon-social-dropbox align-middle mr-3"></i>Orders</h3>
                        <div class="order-table-container text-center">
                            <table class="table table-order text-left">
                                <thead>
                                <tr>
                                    <th class="order-id">ORDER</th>
                                    <th class="order-date">DATE</th>
                                    <th class="order-status">STATUS</th>
                                    <th class="order-price">TOTAL</th>
                                    <th class="order-action text-md-right">ACTIONS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mibed Mattress</td>
                                    <td>27-06-2022</td>
                                    <td><strong>Pending</strong></td>
                                    <td><strong>Pending</strong></td>
                                    <td class="text-md-right"><a href="#">View Order</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!--                            <hr class="mt-0 mb-3 pb-2"/>-->
                            <!--                            <a href="category.php" class="btn btn-dark">Go Shop</a>-->
                        </div>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="address" role="tabpanel">
                    <h3 class="account-sub-title d-none d-md-block mb-1"><i
                                class="sicon-location-pin align-middle mr-3"></i>Addresses</h3>
                    <div class="addresses-content">
                        <p class="mb-4">
                            The following addresses will be used on the checkout page by
                            default.
                        </p>
                        <h3 class="account-title mt-lg-5 mt-4">BILLING ADDRESS
                            <button class="edit-address">Edit</button>
                        </h3>
                        <div class="address-details">
                            <div>
                                <p class="mb-1">John Doe</p>
                                <p class="mb-1">The City Mall</p>
                                <p class="mb-1">Pakistan</p>
                                <p class="mb-1">Jupitor Road, Near Mars Galaxy</p>
                                <p class="mb-1">Islamabad</p>
                                <p class="mb-1">Punjab</p>
                                <p class="mb-1">46000</p>
                                <p class="mb-1">+92 900 78601 </p>
                                <p class="mb-1">johndoe@gmail.com</p>
                                <p class="mb-1">Bronze</p>
                            </div>
                        </div>
                        <div class="address-form d-none">
                            <form action="#" id="checkout-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control">
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
                                           required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           placeholder="Apartment, suite, unite, etc. (optional)" required="">
                                </div>
                                <div class="form-group">
                                    <label>Town / City
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" required="">
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
                                    <input type="text" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Phone <abbr class="required" title="required">*</abbr></label>
                                    <input type="tel" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email address
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-footer mt-3 mb-0">
                                    <button type="submit" class="btn address-form-submit btn-dark mr-0">
                                        Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="edit" role="tabpanel">
                    <h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
                                class="icon-user-2 align-middle mr-3 pr-1"></i>Account Details</h3>
                    <div class="account-content">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc-name">First name <span class="required">*</span></label>
                                        <input type="text" class="form-control" placeholder="Editor"
                                               id="acc-name" name="acc-name" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="acc-lastname">Last name <span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" id="acc-lastname"
                                               name="acc-lastname" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label for="acc-text">Display name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="acc-text" name="acc-text"
                                       placeholder="Editor" required/>
                                <p>This will be how your name will be displayed in the account section and
                                    in
                                    reviews</p>
                            </div>


                            <div class="form-group mb-4">
                                <label for="acc-email">Email address <span class="required">*</span></label>
                                <input type="email" class="form-control" id="acc-email" name="acc-email"
                                       placeholder="editor@gmail.com" required/>
                            </div>

                            <div class="change-password">
                                <h3 class="text-uppercase mb-2">Password Change</h3>

                                <div class="form-group">
                                    <label for="acc-password">Current Password (leave blank to leave
                                        unchanged)</label>
                                    <input type="password" class="form-control" id="acc-password"
                                           name="acc-password"/>
                                </div>

                                <div class="form-group">
                                    <label for="acc-password">New Password (leave blank to leave
                                        unchanged)</label>
                                    <input type="password" class="form-control" id="acc-new-password"
                                           name="acc-new-password"/>
                                </div>

                                <div class="form-group">
                                    <label for="acc-password">Confirm New Password</label>
                                    <input type="password" class="form-control" id="acc-confirm-password"
                                           name="acc-confirm-password"/>
                                </div>
                            </div>

                            <div class="form-footer mt-3 mb-0">
                                <button type="submit" class="btn btn-dark mr-0">
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="billing" role="tabpanel">
                    <div class="address account-content mt-0 pt-2">
                        <h4 class="title">Billing address</h4>

                        <form class="mb-2" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name <span class="required">*</span></label>
                                        <input type="text" class="form-control" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name <span class="required">*</span></label>
                                        <input type="text" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Company </label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="select-custom">
                                <label>Country / Region <span class="required">*</span></label>
                                <select name="orderby" class="form-control">
                                    <option value="" selected="selected">British Indian Ocean Territory
                                    </option>
                                    <option value="1">Brunei</option>
                                    <option value="2">Bulgaria</option>
                                    <option value="3">Burkina Faso</option>
                                    <option value="4">Burundi</option>
                                    <option value="5">Cameroon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Street address <span class="required">*</span></label>
                                <input type="text" class="form-control"
                                       placeholder="House number and street name" required/>
                                <input type="text" class="form-control"
                                       placeholder="Apartment, suite, unit, etc. (optional)" required/>
                            </div>

                            <div class="form-group">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label>State / Country <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label>Postcode / ZIP <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-group mb-3">
                                <label>Phone <span class="required">*</span></label>
                                <input type="number" class="form-control" required/>
                            </div>

                            <div class="form-group mb-3">
                                <label>Email address <span class="required">*</span></label>
                                <input type="email" class="form-control" placeholder="editor@gmail.com"
                                       required/>
                            </div>

                            <div class="form-footer mb-0">
                                <div class="form-footer-right">
                                    <button type="submit" class="btn btn-dark py-4">
                                        Save Address
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="shipping" role="tabpanel">
                    <div class="address account-content mt-0 pt-2">
                        <h4 class="title mb-3">Shipping Address</h4>

                        <form class="mb-2" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name <span class="required">*</span></label>
                                        <input type="text" class="form-control" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name <span class="required">*</span></label>
                                        <input type="text" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Company </label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="select-custom">
                                <label>Country / Region <span class="required">*</span></label>
                                <select name="orderby" class="form-control">
                                    <option value="" selected="selected">British Indian Ocean Territory
                                    </option>
                                    <option value="1">Brunei</option>
                                    <option value="2">Bulgaria</option>
                                    <option value="3">Burkina Faso</option>
                                    <option value="4">Burundi</option>
                                    <option value="5">Cameroon</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Street address <span class="required">*</span></label>
                                <input type="text" class="form-control"
                                       placeholder="House number and street name" required/>
                                <input type="text" class="form-control"
                                       placeholder="Apartment, suite, unit, etc. (optional)" required/>
                            </div>

                            <div class="form-group">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label>State / Country <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-group">
                                <label>Postcode / ZIP <span class="required">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>

                            <div class="form-footer mb-0">
                                <div class="form-footer-right">
                                    <button type="submit" class="btn btn-dark py-4">
                                        Save Address
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .row -->
    </div>
    <div class="mb-5"></div>
</main>
<?php include "footer.php" ?>
