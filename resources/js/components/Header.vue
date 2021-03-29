<template>
    <div>
         <header class="main-header home-2">
                <!-- Header Top Start -->
                <div class="header-top-nav">
                    <div class="container">
                        <div class="row">
                            <!--Left Start-->
                            <div class="col-lg-4 col-md-4">
                                <div class="left-text">
                                    <p>Welcome you to Ecolife store!</p>
                                </div>
                            </div>
                            <!--Left End-->
                            <!--Right Start-->
                            <div class="col-lg-8 col-md-8 text-right">
                                <div class="header-right-nav">
                                    <ul class="res-xs-flex">
                                        <li class="after-n">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i> Compare (0)</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i> Wishlist (0)</a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-navs">
                                        <ul>
                                            <!-- Settings Start -->
                                            <li class="dropdown">
                                                <a class="angle-icon" href="#">Settings</a>
                                                <ul class="dropdown-nav">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </li>
                                            <!-- Settings End -->
                                            <!-- Currency Start -->
                                            <li class="top-10px first-child">
                                                <select>
                                                    <option value="1">USD $</option>
                                                    <option value="2">EUR €</option>
                                                </select>
                                            </li>
                                            <!-- Currency End -->
                                            <!-- Language Start -->
                                            <li class="top-10px mr-15px">
                                                <select>
                                                    <option value="1">English</option>
                                                    <option value="2">France</option>
                                                </select>
                                            </li>
                                            <!-- Language End -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Right End-->
                        </div>
                    </div>
                </div>
                <!-- Header Top End -->
                <!-- Header Buttom Start -->
                <div class="header-navigation sticky-nav">
                    <div class="container">
                        <div class="container-inner">
                            <div class="row">
                                <!-- Logo Start -->
                                <div class="col-md-2 col-sm-2">
                                    <div class="logo">
                                        <a href="index.html"><img :src="'/images/logo/logo.jpg' " alt="" /></a>
                                    </div>
                                </div>
                                <!-- Logo End -->
                                <!-- Navigation Start -->
                                <div class="col-md-10 col-sm-10">
                                    <!--Main Navigation Start -->
                                    <div class="main-navigation d-none d-lg-block">
                                        <ul>
                                            <li class="menu-dropdown">
                                                <a href="#">Home <i class="ion-ios-arrow-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Home Organic <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="index.html">Organic 1</a></li>
                                                            <li><a href="index-2.html">Organic 2</a></li>
                                                            <li><a href="index-3.html">Organic 3</a></li>
                                                            <li><a href="index-4.html">Organic 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Home Cosmetic <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="index-5.html">Cosmetic 1</a></li>
                                                            <li><a href="index-6.html">Cosmetic 2</a></li>
                                                            <li><a href="index-7.html">Cosmetic 3</a></li>
                                                            <li><a href="index-8.html">Cosmetic 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Home Digital <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="index-9.html">Digital 1</a></li>
                                                            <li><a href="index-10.html">Digital 2</a></li>
                                                            <li><a href="index-11.html">Digital 3</a></li>
                                                            <li><a href="index-12.html">Digital 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Home Furniture <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="index-13.html">Furniture 1</a></li>
                                                            <li><a href="index-14.html">Furniture 2</a></li>
                                                            <li><a href="index-15.html">Furniture 3</a></li>
                                                            <li><a href="index-16.html">Furniture 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Home Medical <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="index-17.html">Medical 1</a></li>
                                                            <li><a href="index-18.html">Medical 2</a></li>
                                                            <li><a href="index-19.html">Medical 3</a></li>
                                                            <li><a href="index-20.html">Medical 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown">
                                                <a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                                <ul class="mega-menu-wrap">
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                                            <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                                            <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                                            <li><a href="single-product.html">Shop Single</a></li>
                                                            <li><a href="single-product-variable.html">Shop Variable</a></li>
                                                            <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                                            <li><a href="single-product-group.html">Shop Group</a></li>
                                                            <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                                            <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                                            <li><a href="single-product-slider.html">Shop Slider</a></li>
                                                            <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                                            <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                                            <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                                            <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="banner-wrapper">
                                                        <a href="single-product.html"><img :src=" '/images/banner-image/banner-menu.jpg '" alt="" /></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown">
                                                <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="login.html">Login & Regiter Page</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-dropdown">
                                                <a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Blog Grid <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Blog List <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-dropdown position-static">
                                                        <a href="#">Blog Single <i class="ion-ios-arrow-down"></i></a>
                                                        <ul class="sub-menu sub-menu-2">
                                                            <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                            <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><router-link :to="{ name: 'contact'}">Contact Us</router-link></li>
                                        </ul>
                                    </div>
                                    <!--Main Navigation End -->
                                    <!--Header Bottom Account Start -->
                                    <div class="header_account_area">
                                        <!--Seach Area Start -->
                                        <div class="header_account_list search_list">
                                            <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                            <div class="dropdown_search">
                                                <form action="#">
                                                    <input placeholder="Search entire store here ..." type="text" />
                                                    <div class="search-category">
                                                        <select class="bootstrap-select" name="poscats">
                                                            <option value="0">All categories</option>
                                                            <option value="104">
                                                                Fresh Food
                                                            </option>
                                                            <option value="183">
                                                                - - Fresh Fruit
                                                            </option>
                                                            <option value="187">
                                                                - - - - Bananas
                                                            </option>
                                                            <option value="188">
                                                                - - - - Apples &amp; Pears
                                                            </option>
                                                            <option value="189">
                                                                - - - - Berries &amp; Cherries
                                                            </option>
                                                            <option value="190">
                                                                - - - - Oranges &amp; Citrus Fruit
                                                            </option>
                                                            <option value="191">
                                                                - - - - Grapes
                                                            </option>
                                                            <option value="184">
                                                                - - Fresh Vegetables
                                                            </option>
                                                            <option value="192">
                                                                - - - - Potatoes &amp; Sweet Potatoes
                                                            </option>
                                                            <option value="193">
                                                                - - - - Onions &amp; Leeks
                                                            </option>
                                                            <option value="194">
                                                                - - - - Carrots &amp; Root Vegetables
                                                            </option>
                                                            <option value="195">
                                                                - - - - Broccoli &amp; Cauliflower
                                                            </option>
                                                            <option value="196">
                                                                - - - - Cabbages &amp; Greens
                                                            </option>
                                                            <option value="185">
                                                                - - Fresh Salad &amp; Dips
                                                            </option>
                                                            <option value="197">
                                                                - - - - Lettuce &amp; Salad bags
                                                            </option>
                                                            <option value="198">
                                                                - - - - Tomatoes
                                                            </option>
                                                            <option value="199">
                                                                - - - - Cucumber
                                                            </option>
                                                            <option value="200">
                                                                - - - - Celery
                                                            </option>
                                                            <option value="201">
                                                                - - - - Peppers
                                                            </option>
                                                            <option value="186">
                                                                - - Milk, Butter &amp; Eggs
                                                            </option>
                                                            <option value="202">
                                                                - - - - Milk
                                                            </option>
                                                            <option value="203">
                                                                - - - - Spreads &amp; Margarine
                                                            </option>
                                                            <option value="204">
                                                                - - - - Fresh Cream &amp; Custard
                                                            </option>
                                                            <option value="205">
                                                                - - - - Eggs
                                                            </option>
                                                            <option value="206">
                                                                - - - - Baking &amp; Cooking
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Seach Area End -->
                                        <!--Cart info Start -->
                                        <div class="cart-info d-flex">
                                            <div class="mini-cart-warp">
                                                <a href="#" class="count-cart"><span>$20.00</span></a>
                                                <div class="mini-cart-content">
                                                    <ul>
                                                        <li class="single-shopping-cart">
                                                            <div class="shopping-cart-img">
                                                                <a href="single-product.html"><img alt="" :src="'/images/product-image/mini-cart/1.jpg'"/></a>
                                                                <span class="product-quantity">1x</span>
                                                            </div>
                                                            <div class="shopping-cart-title">
                                                                <h4><a href="single-product.html">Juicy Couture...</a></h4>
                                                                <span>$9.00</span>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="ion-android-cancel"></i></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="single-shopping-cart">
                                                            <div class="shopping-cart-img">
                                                                <a href="single-product.html"><img alt="" :src="'/images/product-image/mini-cart/2.jpg'"/></a>
                                                                <span class="product-quantity">1x</span>
                                                            </div>
                                                            <div class="shopping-cart-title">
                                                                <h4><a href="single-product.html">Water and Wind...</a></h4>
                                                                <span>$11.00</span>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="ion-android-cancel"></i></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="shopping-cart-total">
                                                        <h4>Subtotal : <span>$20.00</span></h4>
                                                        <h4>Shipping : <span>$7.00</span></h4>
                                                        <h4>Taxes : <span>$0.00</span></h4>
                                                        <h4 class="shop-total">Total : <span>$27.00</span></h4>
                                                    </div>
                                                    <div class="shopping-cart-btn text-center">
                                                        <a class="default-btn" href="checkout.html">checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Cart info End -->
                                    </div>
                                </div>
                            </div>
                            <!-- mobile menu -->
                            <div class="mobile-menu-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li>
                                                <a href="index.html">HOME</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Home Organic</a>
                                                        <ul>
                                                            <li><a href="index.html">Organic 1</a></li>
                                                            <li><a href="index-2.html">Organic 2</a></li>
                                                            <li><a href="index-3.html">Organic 3</a></li>
                                                            <li><a href="index-4.html">Organic 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home Cosmetic</a>
                                                        <ul>
                                                            <li><a href="index-5.html">Cosmetic 1</a></li>
                                                            <li><a href="index-6.html">Cosmetic 2</a></li>
                                                            <li><a href="index-7.html">Cosmetic 3</a></li>
                                                            <li><a href="index-8.html">Cosmetic 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home Digital</a>
                                                        <ul>
                                                            <li><a href="index-9.html">Digital 1</a></li>
                                                            <li><a href="index-10.html">Digital 2</a></li>
                                                            <li><a href="index-11.html">Digital 3</a></li>
                                                            <li><a href="index-12.html">Digital 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home Furniture</a>
                                                        <ul>
                                                            <li><a href="index-13.html">Furniture 1</a></li>
                                                            <li><a href="index-14.html">Furniture 2</a></li>
                                                            <li><a href="index-15.html">Furniture 3</a></li>
                                                            <li><a href="index-16.html">Furniture 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Home Medical</a>
                                                        <ul>
                                                            <li><a href="index-17.html">Medical 1</a></li>
                                                            <li><a href="index-18.html">Medical 2</a></li>
                                                            <li><a href="index-19.html">Medical 3</a></li>
                                                            <li><a href="index-20.html">Medical 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shop</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Shop Grid</a>
                                                        <ul>
                                                            <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                                            <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Shop List</a>
                                                        <ul>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Single Shop</a>
                                                        <ul>
                                                            <li><a href="single-product.html">Shop Single</a></li>
                                                            <li><a href="single-product-variable.html">Shop Variable</a></li>
                                                            <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                                            <li><a href="single-product-group.html">Shop Group</a></li>
                                                            <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                                            <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Single Shop</a>
                                                        <ul>
                                                            <li><a href="single-product-slider.html">Shop Slider</a></li>
                                                            <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                                            <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                                            <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                                            <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about.html">About Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="login.html">Login & Regiter Page</a></li>
                                                    <li><a href="my-account.html">Account Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><router-link to="/Contuct">Contuct Us</router-link></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- mobile menu end-->
                        </div>
                    </div>
                </div>
                <!--Header Bottom Account End -->
            </header>
        
    </div>
</template>