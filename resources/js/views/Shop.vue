<template>
    <div>
        <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Shop Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><router-link to="/" >Home</router-link></li>
                                    <li>Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop Category Area End -->
            <div class="shop-category-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar">
                                <!-- Left Side start -->
                                <div class="shop-tab nav mb-res-sm-15">
                                    <a class="active" href="#shop-1" data-toggle="tab">
                                        <i class="fa fa-th show_grid"></i>
                                    </a>
                                    <a href="#shop-2" data-toggle="tab">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                    <p>There Are {{ items.length }} Products.</p>
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap">
                                    <div class="shot-product">
                                        <p>Sort By:</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="">Sort by newness</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-4 col-sm-6" v-for="(item , index) in items" :key="index">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                          <router-link class="thumbnail" :to="{
                                                                name: 'product-details',
                                                                params: {
                                                                    id: item.id
                                                                }
                                                            }">
                                                                <img class="first-img" :src="item.image1" alt="" />
                                                                <img class="second-img" :src="item.image2" alt="" />
                                                            </router-link>

                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="shop-4-column.html"><span>{{item.brand}}</span></a>
                                                        
                                                        <h2>
                                                            <router-link class="product-link" :to="{
                                                                name: 'product-details',
                                                                params: {
                                                                    id: item.id
                                                                }
                                                            }">
                                                                {{item.title}}
                                                            </router-link>
                                                        </h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€{{item.price}}</li>
                                                                <li class="current-price">€{{item.discounted}}</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart">
                                                                 <router-link class="product-link" :to="{
                                                                name: 'product-details',
                                                                params: {
                                                                    id: item.id
                                                                }
                                                            }">
                                                               View
                                                            </router-link>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="single-product.html" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab Two End -->
                                </div>
                                <!-- Shop Tab Content End -->
                                <!--  Pagination Area Start -->
                                <div class="pro-pagination-style text-center">
                                    <ul>
                                        <li>
                                            <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                        </li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li>
                                            <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>
<script>
export default {
    name: "Shop",
    data() {
        return {
            items: [{
                title: 'Juicy Couture Juicy Quilted',
                id:1,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },
            {
                title: 'Juicy Couture Juicy Quilted',
                id:2,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:3,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:4,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:5,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:6,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:7,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:8,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },{
                title: 'Juicy Couture Juicy Quilted',
                id:9,
                price: 12,
                discounted: 15,
                brand: 'Juice Design',
                image1: '/images/product-image/organic/product-1.jpg',
                image2: '/images/product-image/organic/product-1.jpg'
            },
        ]
        };
    }
};
</script>
