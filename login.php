<?php include "header.php" ?>
    <main class="main">
        <div class="container py-5">
            <div id="login" class="col-md-7 col-lg-5 mx-md-auto">
                <div class="modal-wrapper model-popup login-popup">
                    <h2 class="title">Login</h2>
                    <form action="#" class="mb-0">
                        <label for="login-email">
                            Username or email address
                            <span class="required">*</span>
                        </label>
                        <input type="email" class="form-input form-wide mb-2" id="login-email" required="">
                        <label for="login-password">Password<span class="required"> *</span></label>
                        <input type="password" class="form-input form-wide mb-2" id="login-password" required="">
                        <div class="form-footer">
                            <div class="custom-control custom-checkbox ml-0">
                                <input type="checkbox" class="custom-control-input" id="lost-password">
                                <label class="custom-control-label form-footer-right" for="lost-password">Remember
                                    me</label>
                            </div>
                            <div class="form-footer-right">
                                <a href="#" class="forget-password forget-link">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-theme btn-block btn-md">
                                LOGIN
                            </button>

                            <a href="signup.php" class="btn btn-regist bg-transparent text-transform-none p-0"
                               title="register button">
                                Register Now!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div id="forget-pass" class="col-md-7 col-lg-5 mx-md-auto">
                <div class="modal-wrapper model-popup login-popup">
                    <h2 class="title">Forget Password</h2>
                    <form action="#" class="mb-0">
                        <label for="login-email">
                            Username or email address
                            <span class="required">*</span>
                        </label>
                        <input type="email" class="form-input form-wide mb-2" id="login-email" required="">
                        <div class="text-center">
                            <button type="submit" class="btn btn-theme btn-block btn-md">
                                Reset
                            </button>

                            <button type="submit"
                                    class="btn btn-regist bg-transparent text-transform-none p-0 login-form-link"
                                    title="register button">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>