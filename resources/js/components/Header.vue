<template>
    <div>
        <header class="main-header home-2">
            <!-- Header Top Start -->
            <div class="header-top-nav">
                <div class="container">
                    <div class="row">
                        <!--Left Start-->
                        <div class="col-lg-4 col-md-4"></div>
                        <!--Left End-->
                        <!--Right Start-->
                        <div class="col-lg-8 col-md-8 text-right">
                            <div class="header-right-nav">
                                <ul class="res-xs-flex">
                                    <li v-if="userLoggedIn">
                                        <router-link to="/dashboard"
                                            >User Dashboard</router-link
                                        >
                                    </li>
                                    <li v-if="userLoggedIn">
                                        <a href="#" @click="logout">Logout</a>
                                    </li>
                                </ul>
                                <div class="dropdown-navs">
                                    <ul>
                                        <!-- Settings Start -->
                                        <!-- <li class="dropdown">
                                                <a class="angle-icon" href="#">Settings</a>
                                                <ul class="dropdown-nav">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                </ul>
                                            </li> -->
                                        <li>
                                            <a
                                                href="/admin/login"
                                                target="_blank"
                                                >Admin Panel</a
                                            >
                                        </li>
                                        <!-- Settings End -->
                                        <!-- Currency Start -->
                                        <!-- <li class="top-10px first-child">
                                                <select>
                                                    <option value="1">USD $</option>
                                                    <option value="2">EUR €</option>
                                                </select>
                                            </li> -->

                                        <!-- Currency End -->
                                        <!-- Language Start -->
                                        <li class="top-10px mr-15px">
                                            <select>
                                                <option value="1"
                                                    >English</option
                                                >
                                                <option value="2"
                                                    >France</option
                                                >
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
                                    <router-link to="/"
                                        ><img
                                            :src="'/images/logo/logo.jpg'"
                                            alt=""
                                    /></router-link>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Navigation Start -->
                            <div class="col-md-10 col-sm-10">
                                <!--Main Navigation Start -->
                                <div class="main-navigation d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <router-link to="/"
                                                >Home
                                            </router-link>
                                        </li>
                                        <li>
                                            <router-link to="/shop"
                                                >Shop
                                            </router-link>
                                        </li>
                                        <li v-if="!userLoggedIn">
                                            <router-link to="/login"
                                                >Login</router-link
                                            >
                                        </li>
                                        <li v-if="!userLoggedIn">
                                            <router-link to="/register"
                                                >Register</router-link
                                            >
                                        </li>
                                        <li>
                                            <router-link to="/contact"
                                                >Contact Us</router-link
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <!--Main Navigation End -->
                                <!--Header Bottom Account Start -->
                                <div class="header_account_area">
                                    <!--Seach Area Start -->
                                    <div
                                        class="header_account_list search_list"
                                    >
                                        <a href="javascript:void(0)"
                                            ><i
                                                class="ion-ios-search-strong"
                                            ></i
                                        ></a>
                                        <div class="dropdown_search">
                                            <form action="#">
                                                <input
                                                    placeholder="Search entire store here ..."
                                                    type="text"
                                                />
                                                <div class="search-category">
                                                    <select
                                                        class="bootstrap-select"
                                                        name="poscats"
                                                    >
                                                        <option value="0"
                                                            >All
                                                            categories</option
                                                        >
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
                                                            - - - - Apples &amp;
                                                            Pears
                                                        </option>
                                                        <option value="189">
                                                            - - - - Berries
                                                            &amp; Cherries
                                                        </option>
                                                        <option value="190">
                                                            - - - - Oranges
                                                            &amp; Citrus Fruit
                                                        </option>
                                                        <option value="191">
                                                            - - - - Grapes
                                                        </option>
                                                        <option value="184">
                                                            - - Fresh Vegetables
                                                        </option>
                                                        <option value="192">
                                                            - - - - Potatoes
                                                            &amp; Sweet Potatoes
                                                        </option>
                                                        <option value="193">
                                                            - - - - Onions &amp;
                                                            Leeks
                                                        </option>
                                                        <option value="194">
                                                            - - - - Carrots
                                                            &amp; Root
                                                            Vegetables
                                                        </option>
                                                        <option value="195">
                                                            - - - - Broccoli
                                                            &amp; Cauliflower
                                                        </option>
                                                        <option value="196">
                                                            - - - - Cabbages
                                                            &amp; Greens
                                                        </option>
                                                        <option value="185">
                                                            - - Fresh Salad
                                                            &amp; Dips
                                                        </option>
                                                        <option value="197">
                                                            - - - - Lettuce
                                                            &amp; Salad bags
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
                                                            - - Milk, Butter
                                                            &amp; Eggs
                                                        </option>
                                                        <option value="202">
                                                            - - - - Milk
                                                        </option>
                                                        <option value="203">
                                                            - - - - Spreads
                                                            &amp; Margarine
                                                        </option>
                                                        <option value="204">
                                                            - - - - Fresh Cream
                                                            &amp; Custard
                                                        </option>
                                                        <option value="205">
                                                            - - - - Eggs
                                                        </option>
                                                        <option value="206">
                                                            - - - - Baking &amp;
                                                            Cooking
                                                        </option>
                                                    </select>
                                                </div>
                                                <button type="submit">
                                                    <i
                                                        class="ion-ios-search-strong"
                                                    ></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--Seach Area End -->
                                    <!--Cart info Start -->
                                    <!-- <div class="cart-info d-flex">
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
                                        </div> -->
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
                                            <router-link to="/"
                                                >Home
                                            </router-link>
                                        </li>
                                        <li>
                                            <router-link to="/shop"
                                                >Shop
                                            </router-link>
                                        </li>
                                        <li v-if="!userLoggedIn">
                                            <router-link to="/login"
                                                >Login</router-link
                                            >
                                        </li>
                                        <li v-if="!userLoggedIn">
                                            <router-link to="/register"
                                                >Register</router-link
                                            >
                                        </li>
                                        <li>
                                            <router-link to="/contact"
                                                >Contact Us</router-link
                                            >
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    data() {
        return {
            userLoggedIn: "",
            loggedInUser: ""
        };
    },
    mounted() {
        this.userLoggedIn = localStorage.getItem("company_user_token");
        this.loggedInUser = JSON.parse(localStorage.getItem("company_user"));
    },
    methods: {
        logout() {
            localStorage.removeItem("company_user_token");
            localStorage.removeItem("company_user");
            window.location = "/dashboard";
            // this.$router.push({
            //     name: 'login'
            // })
        }
    }
};
</script>

<style lang="scss" scoped></style>
