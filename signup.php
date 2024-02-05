<?php include "header.php" ?>
    <main class="main">
        <div class="container py-5">
            <div id="signup" class="col-md-7 col-lg-5 mx-md-auto">
                <div class="modal-wrapper model-popup login-popup">
                    <h2 class="title">Register</h2>
                    <form action="#" class="mb-0">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="f-name">
                                    First Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="f-name" required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="l-name">
                                    Last Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="l-name" required="">
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
                            <div class="col-lg-6">
                                <label for="number">Phone Number<span class="required"> *</span></label>
                                <input type="number" class="form-input form-wide mb-2" id="number"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="Address">Address<span class="required"> *</span></label>
                                <input type="text" class="form-input form-wide mb-2" id="Address"
                                       required="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-theme btn-block btn-md">
                                Register
                            </button>

                            <a href="login.php" class="btn btn-regist bg-transparent text-transform-none p-0"
                               title="register button">
                                LOGIN
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>