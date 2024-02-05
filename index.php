<?php include "header.php" ?>
<main class="main">
    <section class="intro-section">
        <div class="">
            <div class="home-slider slide-animate owl-carousel owl-theme owl-carousel-lazy">
                <div class="home-slide home-slide-1 banner d-flex flex-wrap">
                    <img src="assets/images/hero-banner.png" alt="">
                </div>
                <div class="home-slide home-slide-1 banner d-flex flex-wrap">
                    <img src="assets/images/hero-banner.png" alt="">
                </div>
                <div class="home-slide home-slide-1 banner d-flex flex-wrap">
                    <img src="assets/images/hero-banner.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class='filter-tabs'>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-11  mx-auto">
                    <div class="filter-btns">
                        <button data-target="#Mattress" class="filter-btn active">Mattress</button>
                        <button data-target="#Beds" class="filter-btn ">Beds</button>
                    </div>
                    <div class="filter-content">
                        <div id="Mattress" class="filter-content-inner container-fluid">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-6 column">
                                            <div class="form-group">
                                                <label for="Size">Size</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Size" class="form-control">
                                                        <option selected>Size</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Style">Style</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Style" class="form-control">
                                                        <option selected>Style</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Material">Material</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Material" class="form-control">
                                                        <option selected>Material</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Storage">Storage</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Storage" class="form-control">
                                                        <option selected>Storage</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="formControlRange" class="range-slider">Price Range:
                                                    <span class="rangeValues">£ 100 to £ 5000</span></label>
                                                <!--                                                    <input type="range" class="form-control-range"-->
                                                <!--                                                           id="formControlRange">-->
                                                <div class="range-slider">
                                                    <!--                                                        <span class="rangeValues"></span>-->
                                                    <input value="100" min="100" max="5000" step="100"
                                                           type="range">
                                                    <input value="5000" min="100" max="5000" step="100"
                                                           type="range">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Beds" class="container-fluid filter-content-inner">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-6 column">
                                            <div class="form-group">
                                                <label for="Size">Size</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Size" class="form-control">
                                                        <option selected>Size</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-md-0 column">
                                            <label for="Style">Style</label>
                                            <div class="custom-select-arrow">
                                                <select id="Style" class="form-control">
                                                    <option selected>Style</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Material">Material</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Material" class="form-control">
                                                        <option selected>Material</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Storage">Storage</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Storage" class="form-control">
                                                        <option selected>Storage</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Color">Color</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Color" class="form-control">
                                                        <option selected>Color</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 mx-md-auto">
                                    <div class="row">
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="Color">Color</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Color" class="form-control">
                                                        <option selected>Color</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 column">
                                            <div class="form-group">
                                                <label for="formControlRange" class="range-slider">Price Range:
                                                    <span class="rangeValues">£ 100 to £ 5000</span></label>
                                                <div class="range-slider range-slider-two">
                                                    <input value="100" min="100" max="5000" step="100"
                                                           type="range">
                                                    <input value="5000" min="100" max="5000" step="100"
                                                           type="range">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-0 mt-lg-0 mt-2 column">
                                            <div class="form-group">
                                                <label for="Headboard">Headboard</label>
                                                <div class="custom-select-arrow">
                                                    <select id="Headboard" class="form-control">
                                                        <option selected>Headboard</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-btn">
                        <a href="mattress.php" class="home-filter-search-btn"><i class="icon-magnifier"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-products">
        <div class="container">
            <h2 class="section-title appear-animate" data-animation-delay="200"
                data-animation-name="fadeInUpShorter">Most Popular Products</h2>
            <div class="row">
                <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-animation-delay="200"
                     data-animation-name="fadeInUpShorter" data-owl-options="{
                            'margin': 0
                        }">
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/bad-img-1.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Velvetta Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple"
                                   href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html"
                                   title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/bad-img-2.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Diamond Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Single Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple"
                                   href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html"
                                   title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/bad-img-3.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Sleepcat Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple"
                                   href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html"
                                   title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/bad-img-4.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">LuxuryCraft Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple"
                                   href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html"
                                   title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="products-slider-btn appear-animate" data-animation-delay="200"
                     data-animation-name="fadeInUpShorter">
                    <a href="#" class="products-btn">See More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="discount-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 discount-column">
                    <a href="#">
                        <img src="assets/images/discount-img-full-1.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 discount-column">
                    <a href="#">
                        <img src="assets/images/discount-img-full-2.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 discount-column">
                    <a href="#">
                        <img src="assets/images/discount-img-full-3.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="trendy-section mb-2">
        <div class="container">
            <h2 class="section-title appear-animate" data-animation-delay="200"
                data-animation-name="fadeInUpShorter">Last Chance To Buy</h2>
            <div class="row appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter">
                <div class="products-slider 5col owl-carousel owl-theme" data-owl-options="{
                            'margin': 0
                        }">
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/products/product-img-5.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Molty Foam Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple" href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html" title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/products/product-img-6.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Sealy Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Single Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple" href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html" title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/products/product-img-7.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Sleepcat Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple" href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html" title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="javascript:void(0)">
                                <img alt="product" height="280"
                                     src="assets/images/products/product-img-8.png" width="280">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a class="product-category" href="category.html">Dream Baby Mattress</a>
                            </div>
                            <h3 class="product-title">
                                <a href="javascript:void(0)">Soft Double</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.0</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a class="btn-icon-wish" href="compare.php" title="wishlist">
                                    <img src="assets/images/campare-icon.png" alt="">
                                </a>
                                <a class="btn-icon btn-add-cart product-type-simple" href="javascript:void(0)">
                                    <i class="icon-shopping-cart"></i>
                                    <span>ADD TO CART</span></a>
                                <a class="btn-quickview" href="product-quick-view.html" title="Quick View">
                                    <img src="assets/images/arrows-line.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <div class="products-slider-btn appear-animate animated fadeInUpShorter appear-animation-visible"
                     data-animation-delay="200" data-animation-name="fadeInUpShorter"
                     style="animation-duration: 1000ms;">
                    <a href="#" class="products-btn">See More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-products">
        <div class="container">
            <div class="categories-slider owl-carousel owl-theme mb-4 appear-animate" data-animation-delay="200"
                 data-animation-name="fadeInUpShorter" data-owl-options="{
                        'margin': 2,
                        'nav': false,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '600': {
                                'items': 2
                            },
                            '1200': {
                                'items': 3
                            }
                        }
                    }">
                <div class="product-category">
                    <img alt="icon" height="60" src="assets/images/demoes/demo27/icons/icon-1.png" width="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">Free shipping & Return</h3>
                        <p class="icon-para">Free shipping on all orders over $99</p>
                    </div>
                </div>
                <div class="product-category">
                    <img alt="icon" height="60" src="assets/images/demoes/demo27/icons/icon-2.png" width="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">Money back guarantee</h3>
                        <p class="icon-para">100% money back grarantee</p>
                    </div>
                </div>
                <div class="product-category">
                    <img alt="icon" height="60" src="assets/images/demoes/demo27/icons/icon-3.png" width="60">
                    <div class="category-content">
                        <h3 class="font2 ls-0 text-uppercase mb-0">Online Support 24/7</h3>
                        <p class="icon-para">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End .main -->
<?php include "footer.php" ?>

