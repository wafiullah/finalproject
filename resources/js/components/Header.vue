<template>
    <div>
        <header class="main-header home-2">
            <div class="header-top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4"></div>
                        <div class="col-lg-8 col-md-8 text-right">
                            <div class="header-right-nav">
                                <ul class="res-xs-flex">
                                    <li v-if="userLoggedIn">
                                        <router-link to="/dashboard"
                                            >User Dashboard</router-link
                                        >
                                    </li>
                                    <li v-if="userLoggedIn">
                                      <router-link to="/dashboard"
                                            >{{loggedInUser.name}}</router-link
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
                                        <!-- <li class="top-10px mr-15px">
                                            <select>
                                                <option value="1"
                                                    >English</option
                                                >
                                                <option value="2"
                                                    >France</option
                                                >
                                            </select>
                                        </li> -->
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
