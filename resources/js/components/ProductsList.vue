<template>
    <article class="list-product">
        <div class="img-block">
            <router-link
                class="thumbnail"
                :to="{
                    name: 'product-details',
                    params: {
                        id: item.id
                    }
                }"
            >
                <img class="first-img" :src="item.image1" alt="" />
                <img class="second-img" :src="item.image2" alt="" />
            </router-link>
        </div>
        <ul class="product-flag">
            <li class="new">New</li>
        </ul>
        <div class="product-decs">
            <a class="inner-link" href="shop-4-column.html"
                ><span>{{ item.brand }}</span></a
            >

            <h2>
                <router-link
                    class="product-link"
                    :to="{
                        name: 'product-details',
                        params: {
                            id: item.id
                        }
                    }"
                >
                    {{ item.title }}
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
                    <li class="old-price">Af {{ item.price }}</li>
                    <li class="current-price">Af {{ item.discounted_price }}</li>
                    <li class="discount-price">
                        -{{ calculatePercentage(item) }}%
                    </li>
                </ul>
            </div>
        </div>
        <div class="add-to-link">
            <ul>
                <li class="cart">
                    <router-link
                        class="cart-btn"
                        :to="{
                            name: 'product-details',
                            params: {
                                id: item.id
                            }
                        }"
                    >
                        View
                    </router-link>
                </li>
            </ul>
        </div>
    </article>
</template>

<script>

export default {
    props: {
        item: {
            type: Object,
            required: true
        }
    },
    methods: {
        calculatePercentage(item) {
            return parseFloat(
              100 - (item.discounted_price * 100 / item.price)
               ,
               0
            ).toFixed(0);
        }
    }
};
</script>
