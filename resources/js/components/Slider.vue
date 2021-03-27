<template>
    <div class="slider-area home-2 home-4">
        <carousel :items="1" :nav="false" :dots="true">
            <!-- <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style"> -->
            <!-- Slider Single Item Start -->
            <div
                class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(images/slider-image/sample-7.jpg);"
            >
                <div class="container">
                    <div class="slider-content-5 slider-animated-1 text-left">
                        <span class="animated">100% NATURAL</span>
                        <h1 class="animated">
                            Fresh Vegetables<br />
                            And Fruits
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated"
                            >SHOP NOW</a
                        >
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
            <!-- Slider Single Item Start -->
            <div
                class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(images/slider-image/sample-8.jpg);"
            >
                <div class="container">
                    <div class="slider-content-5 slider-animated-1 text-left">
                        <span class="animated">BEST OFFER SALE !</span>
                        <h1 class="animated">
                            Up To 70% Off <br />
                            Fresh Juice
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated"
                            >SHOP NOW</a
                        >
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
            <!-- </div> -->
        </carousel>
    </div>
</template>
<script>
import carousel from "vue-owl-carousel";
export default {
    components: { carousel }
};
</script>
