<link href="assets/css/style.css" rel="stylesheet">
<?php include "header.php" ?>
<main class="main">
    <nav class="header-pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-pagination-inner">
                        <a class="font6" href="index.php">Home</a>
                        <span><img src="assets/images/pagination-icon.png" alt=""></span>
                        <span class="font6">Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container contact-us-container pt-lg-4 pt-3">
        <div class="col-lg-12 mx-lg-auto">
            <div class="contact-info">
                <div class="row">
                    <div class="col-12">
                        <h2 class="ls-n-25 m-b-1">
                            Contact Info
                        </h2>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box text-center">
                            <i class="sicon-location-pin"></i>
                            <div class="feature-box-content">
                                <h3>Address</h3>
                                <h5>123 Wall Street, New York / NY</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box text-center">
                            <i class="fa fa-mobile-alt"></i>
                            <div class="feature-box-content">
                                <h3>Phone Number</h3>
                                <h5>(800) 123-4567</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box text-center">
                            <i class="far fa-envelope"></i>
                            <div class="feature-box-content">
                                <h3>E-mail Address</h3>
                                <h5>porto@portotheme.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box text-center">
                            <i class="far fa-calendar-alt"></i>
                            <div class="feature-box-content">
                                <h3>Working Days/Hours</h3>
                                <h5>Mon - Sun / 9:00AM - 8:00PM</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-2">Send Us a Message</h2>
                        <form class="mb-0" action="#">
                            <div class="form-group">
                                <label class="mb-1" for="contact-name">Your Name
                                    <span class="required">*</span></label>
                                <input type="text" class="form-control" id="contact-name" name="contact-name"
                                       required/>
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="contact-email">Your E-mail
                                    <span class="required">*</span></label>
                                <input type="email" class="form-control" id="contact-email" name="contact-email"
                                       required/>
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="contact-message">Your Message
                                    <span class="required">*</span></label>
                                <textarea cols="30" rows="1" id="contact-message" class="form-control"
                                          name="contact-message" required></textarea>
                            </div>

                            <div class="form-footer mb-0">
                                <button type="submit" class="btn btn-dark font-weight-normal">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <iframe class="border-0 h-100 w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14145775.934404392!2d60.330916765820994!3d30.04951941788745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1658584242569!5m2!1sen!2s"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php" ?>

