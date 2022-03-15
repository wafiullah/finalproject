<template>
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- footer single wedget -->
                    <div class="col-md-6 col-lg-4">
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a href="index.html"
                                ><img
                                    :src="'/images/logo/footer-logo.png '"
                                    alt=""
                            /></a>
                        </div>
                        <!-- footer logo -->
                        <div class="about-footer">
                            
                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com"
                                            ><i class="ion-social-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com"
                                            ><i class="ion-social-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com"
                                            ><i class="ion-social-youtube"></i
                                        ></a>
                                    </li>
                                   
                                    <li>
                                        <a href="https://www.instagram.com"
                                            ><i class="ion-social-instagram"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer single wedget -->
                    <div
                        class="col-md-6 col-lg-2 mt-res-sx-30px mt-res-md-30px"
                    >
                        <div class="single-wedge">
                            <h4 class="footer-herading">Information</h4>
                            <div class="footer-links">
                                <ul>
                                    <li>
                                         <router-link to="/contact"
                                                >Contact Us
                                            </router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer single wedget -->
                    <div
                        class="col-md-6 col-lg-2 mt-res-md-50px mt-res-sx-30px mt-res-md-30px"
                    >
                        <div class="single-wedge">
                            <h4 class="footer-herading">Custom Links</h4>
                            <div class="footer-links">
                                <ul>
                                    <li>  <router-link to="/shop"
                                                >Shop
                                            </router-link></li>
                                    <li> <router-link to="/register"
                                                >Register</router-link
                                            ></li>
                                    <li> <router-link to="/login"
                                                >Login</router-link
                                            ></li>
                                    <li>
                                        <router-link to="/dashboard"
                                                >My Account</router-link
                                            >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer single wedget -->
                    <div
                        class="col-md-6 col-lg-4 mt-res-md-50px mt-res-sx-30px mt-res-md-30px"
                    >
                        <div class="single-wedge">
                            <h4 class="footer-herading">Newsletter</h4>
                            <div class="subscrib-text">
                                <p>
                                    You may unsubscribe at any moment. For that
                                    purpose, please find our contact info in the
                                    legal notice.
                                </p>
                            </div>
                            <!-- <div class="img_app">
                                <a href="https://play.google.com/store/apps"
                                    ><img
                                        :src="'/images/icons/app_store.png'"
                                        alt=""
                                /></a>
                                <a href="https://play.google.com/store/apps"
                                    ><img
                                        :src="'/images/icons/google_play.png'"
                                        alt=""
                                /></a>
                            </div> -->
                        </div>
                    </div>
                    <!-- footer single wedget -->
                </div>
            </div>
        </div>
        <!--  Footer Bottom Area start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <p class="copy-text">
                            Copyright ©
                            <a href=""> </a>. All
                            Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <img
                            class="payment-img"
                            :src="'/images/icons/payment.png'"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!--  Footer Bottom Area End-->
    </footer>
</template>
