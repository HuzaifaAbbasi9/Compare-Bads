<?php include "header.php" ?>
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
    <section class="main-wrapper-outer">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 main-content">
                    <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <a href="#" class="sidebar-toggle">
                                <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                    <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                    <path
                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                    <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                    <path
                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                </svg>
                                <span>Filter</span>
                            </a>
                            <div class="toolbox-item toolbox-sort">
                                <label>Sort By:</label>

                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->


                            </div>
                            <div class="toolbox-item toolbox-sort">
                                <label>Brand:</label>

                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Any Brand</option>
                                        <option value="popularity">Any Brand</option>
                                        <option value="rating">Sort Any Brand</option>
                                        <option value="date">Sort by Any Brand</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->


                            </div>
                            <!-- End .toolbox-item -->
                        </div>
                        <!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->
                            <!-- End .layout-modes -->
                        </div>
                        <!-- End .toolbox-right -->
                    </nav>

                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-1.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-1-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <!--                                            <div class="product-label label-hot">HOT</div>-->
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Ultimate 3D Bluetooth
                                            Speaker</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-2.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-2-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Brown Women Casual
                                            HandBag</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="product-price">$33.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-3.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-3-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Circled Ultimate 3D
                                            Speaker</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>

                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-4.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-4-2.jpg" width="280" height="280"
                                             alt="product">
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-30%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Blue Backpack for the Young -
                                            S</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-5.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-5-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <!--                                            <div class="product-label label-hot">HOT</div>-->
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Casual Spring Blue Shoes</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-6.jpg" width="280" height="280"
                                             alt="product">
                                        <img src="assets/images/products/product-6-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-8%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Men Black Gentle Belt</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-7.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-7-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-8%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Brown-Black Men Casual
                                            Glasses</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-8.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-8-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-40%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Brown-Black Men Casual
                                            Glasses</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-9.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-9-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Black Men Casual Glasses</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-10.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-10-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <div class="product-label label-sale">-30%</div>
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Basketball Sports Blue
                                            Shoes</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-11.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-11-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Men Sports Travel Bag</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->

                        <div class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/products/product-12.jpg" width="280" height="280"
                                             alt="product"/>
                                        <img src="assets/images/products/product-12-2.jpg" width="280" height="280"
                                             alt="product"/>
                                    </a>

                                    <div class="label-group">
                                        <!--                                            <div class="product-label label-hot">HOT</div>-->
                                    </div>
                                </figure>

                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>

                                    <h3 class="product-title"><a href="javascript:void(0)">Brown HandBag</a></h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a class="btn-icon-wish" href="compare.php" title="compare">
                                            <!--                                        <i class="icon-heart"></i>-->
                                            <img src="assets/images/campare-icon.png" alt="">
                                        </a>
                                        <a class="btn-icon btn-add-cart product-type-simple"
                                           href="javascript:void(0)">
                                            <i class="icon-shopping-cart"></i>
                                            <span>ADD TO CART</span></a>
                                        <a class="btn-quickview" href="product-quick-view.html"
                                           title="Quick View">
                                            <!--                                        <i class="fas fa-external-link-alt"></i>-->
                                            <img src="assets/images/arrows-line.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                    </div>
                    <!-- End .row -->

                    <nav class="toolbox toolbox-pagination">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                                <select name="count" class="form-control">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->
                        </div>
                        <!-- End .toolbox-item -->

                        <ul class="pagination toolbox-item">
                            <li class="page-item disabled">
                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End .col-lg-9 -->

                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                                   aria-controls="widget-body-3">Price</a>
                            </h3>

                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body pb-0">
                                    <form action="#">
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div>
                                            <!-- End #price-slider -->
                                        </div>
                                        <!-- End .price-slider-wrapper -->
                                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="filter-price-text">
                                                Price:
                                                <span id="filter-price-range"></span>
                                            </div>
                                            <!-- End .filter-price-text -->

                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                        <!-- End .filter-price-action -->
                                    </form>
                                    <img src="assets/images/sidebar-img.png" class="mt-4" alt="">
                                    <img src="assets/images/sidebar-img-1.png" class="mt-4" alt="">
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
    </section>
</main>
<?php include "footer.php" ?>
