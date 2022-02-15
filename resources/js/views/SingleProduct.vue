<template>
    <div>
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-hrading">
                                Single Product Page
                            </h1>
                            <ul class="breadcrumb-links">
                                <li><a href="/">Home</a></li>
                                <li>Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->
        <!-- Shop details Area start -->
        <section class="product-details-area mtb-60px" v-if="item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="product-details-img product-details-tab">
                            <div class="zoompro-wrap zoompro-2">
                                <div class="zoompro-border zoompro-span">
                                    <img
                                        class="zoompro"
                                        :src="item.image1"
                                        data-zoom-image="assets/images/product-image/organic/zoom/1.jpg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 offset-1">
                        <div class="product-details-content">
                            <h2>{{ item.title }}</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"
                                    ><a class="reviews" href="#"
                                        >Read reviews (1)</a
                                    ></span
                                >
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">
                                        ${{ item.price }}
                                    </li>
                                </ul>
                            </div>
                            <p>{{ item.description }}</p>

                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="ion-social-facebook"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="ion-social-twitter"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="ion-social-google"
                                                ></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i
                                                    class="ion-social-instagram"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="description-review-area mb-60px">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <tabs :options="{ useUrlFragment: false,defaultTabHash: 'Description' }">
                            <tab name="Description">
                                <div class="product-description-wrapper">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                    <p>
                                        ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut
                                        aliquip ex ea commo consequat. Duis aute
                                        irure dolor in reprehend in voluptate
                                        velit esse cillum dolore eu fugiat nulla
                                        pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa
                                        qui officia deserunt
                                    </p>
                                </div>
                            </tab>
                            <tab name="Reviews">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                    <img
                                                        src="assets/images/testimonial-image/1.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="review-content">
                                                    <div
                                                        class="review-top-wrap"
                                                    >
                                                        <div
                                                            class="review-left"
                                                        >
                                                            <div
                                                                class="review-name"
                                                            >
                                                                <h4>
                                                                    White Lewis
                                                                </h4>
                                                            </div>
                                                            <div
                                                                class="rating-product"
                                                            >
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="review-left"
                                                        >
                                                            <a href="#"
                                                                >Reply</a
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante
                                                            ipsum primis aucibus
                                                            orci luctustrices
                                                            posuere cubilia
                                                            Curae Suspendisse
                                                            viverra ed viverra.
                                                            Mauris ullarper
                                                            euismod vehicula.
                                                            Phasellus quam nisi,
                                                            congue id nulla.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single-review child-review"
                                            >
                                                <div class="review-img">
                                                    <img
                                                        src="assets/images/testimonial-image/2.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="review-content">
                                                    <div
                                                        class="review-top-wrap"
                                                    >
                                                        <div
                                                            class="review-left"
                                                        >
                                                            <div
                                                                class="review-name"
                                                            >
                                                                <h4>
                                                                    White Lewis
                                                                </h4>
                                                            </div>
                                                            <div
                                                                class="rating-product"
                                                            >
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                                <i
                                                                    class="ion-android-star"
                                                                ></i>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="review-left"
                                                        >
                                                            <a href="#"
                                                                >Reply</a
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            Vestibulum ante
                                                            ipsum primis aucibus
                                                            orci luctustrices
                                                            posuere cubilia
                                                            Curae Sus pen disse
                                                            viverra ed viverra.
                                                            Mauris ullarper
                                                            euismod vehicula.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span
                                                            >Your rating:</span
                                                        >
                                                        <div
                                                            class="rating-product"
                                                        >
                                                            <i
                                                                class="ion-android-star"
                                                            ></i>
                                                            <i
                                                                class="ion-android-star"
                                                            ></i>
                                                            <i
                                                                class="ion-android-star"
                                                            ></i>
                                                            <i
                                                                class="ion-android-star"
                                                            ></i>
                                                            <i
                                                                class="ion-android-star"
                                                            ></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div
                                                                class="rating-form-style mb-10"
                                                            >
                                                                <input
                                                                    placeholder="Name"
                                                                    type="text"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div
                                                                class="rating-form-style mb-10"
                                                            >
                                                                <input
                                                                    placeholder="Email"
                                                                    type="email"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div
                                                                class="rating-form-style form-submit"
                                                            >
                                                                <textarea
                                                                    name="Your Review"
                                                                    placeholder="Message"
                                                                ></textarea>
                                                                <input
                                                                    type="submit"
                                                                    value="Submit"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tab>
                        </tabs>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import { Tabs, Tab } from "vue-tabs-component";

export default {
    components: {
        Tabs,
        Tab
    },
    data() {
        return {
            item: null
        };
    },
    methods: {
        getSingleProduct() {
            axios
                .get(route("shop.product", { id: this.$route.params.id }))
                .then(res => {
                    this.item = res.data.data;
                })
                .catch(err => {})
                .finally(() => {});
        }
    },
    mounted() {
        this.getSingleProduct();
    }
};
</script>

<style>
.tabs-component-tabs {
    display: inline-flex;
}
</style>
