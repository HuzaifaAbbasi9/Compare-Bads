<?php include "header.php" ?>
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
        <div class="container py-5">
            <div id="signup" class="col-md-7 mx-md-auto">
                <div class="modal-wrapper model-popup login-popup">
                    <h2 class="title text-center mb-4">Register Your Shop</h2>
                    <form action="#" class="mb-0">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="name">
                                    Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="name" required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="shop-name">
                                    Shop Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="shop-name" required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">
                                    Email
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="email" required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="address">Address<span class="required"> *</span></label>
                                <input type="password" class="form-input form-wide mb-2" id="address"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="number">Contact Number<span class="required"> *</span></label>
                                <input type="number" class="form-input form-wide mb-2" id="number"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <div class="select-custom register-select">
                                    <label class="side-bar-label" for="Speciality">Speciality</label>
                                    <select name="orderby" id="Speciality" class="form-control">
                                        <option value="" selected="selected">Choose one</option>
                                        <option value="2">000</option>
                                        <option value="3">000</option>
                                        <option value="4">000</option>
                                        <option value="5">000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="compnay-number">Company Registration Number<span class="required"> *</span></label>
                                <input type="number" class="form-input form-wide mb-2" id="compnay-number"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="vat-number">VAT Registration Number<span class="required"> *</span></label>
                                <input type="number" class="form-input form-wide mb-2" id="vat-number"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="login-password">Password<span class="required"> *</span></label>
                                <input type="password" class="form-input form-wide mb-2" id="login-password"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="c-password">Confirm Password<span class="required"> *</span></label>
                                <input type="password" class="form-input form-wide mb-2" id="c-password"
                                       required="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-theme btn-block btn-md">
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="mb-lg-5 mb-4"></div>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>