<template>
    <div class="cart-info d-flex">
        <div class="mini-cart-warp" @click="toggleSmallCart()">
            <a href="#" class="count-cart"
                ><span>${{ total }}</span></a
            >
            <div
                class="mini-cart-content"
                v-bind:class="{ 'cart-visible': isActive }"
            >
                <ul>
                    <li
                        class="single-shopping-cart"
                        v-for="product in products"
                    >
                        <div class="shopping-cart-img">
                            <router-link
                                :to="{
                                    name: 'product-details',
                                    params: {
                                        id: product.id
                                    }
                                }"
                                ><img alt="" :src="product.image"
                            /></router-link>
                            <span class="product-quantity">1x</span>
                        </div>
                        <div class="shopping-cart-title">
                            <h4>
                                <router-link
                                    :to="{
                                        name: 'product-details',
                                        params: {
                                            id: item.id
                                        }
                                    }"
                                >
                                    {{ item.title }}
                                </router-link>
                            </h4>
                            <span>${{ product.price }}</span>
                            <div class="shopping-cart-delete">
                                <a href="#"
                                    ><i class="ion-android-cancel"></i
                                ></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="shopping-cart-total">
                    <h4>Subtotal : <span>${{ total }}</span></h4>
                    <h4 class="shop-total">
                        Total : <span>${{ total }}</span>
                    </h4>
                </div>
                <div class="shopping-cart-btn text-center">
                    <a class="default-btn" href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";
export default {
    data() {
        return {
            isActive: false
        };
    },
    computed: {
        ...mapGetters("cart", {
            products: "cartProducts",
            total: "cartTotal"
        }),

        ...mapState("cart", {
            checkoutStatus: state => state.checkoutStatus
        })
    },

    methods: {
        ...mapActions("cart", ["checkout"]),
        toggleSmallCart() {
            this.isActive = !this.isActive;
        }
    }
};
</script>

<style lang="scss" scoped></style>
