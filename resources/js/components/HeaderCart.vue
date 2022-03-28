<template>
    <div class="cart-info d-flex">
        <div class="mini-cart-warp" @click="toggleSmallCart()">
            <a href="#" class="count-cart" ><span class="item-counts">{{products.length}}</span><span>${{ total }}</span></a>
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
                            <span class="product-quantity">{{product.quantity}}x</span>
                        </div>
                        <div class="shopping-cart-title">
                            <h4>
                                <router-link
                                    :to="{
                                        name: 'product-details',
                                        params: {
                                            id: product.id
                                        }
                                    }"
                                >
                                    {{ product.title }}
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
                    <router-link
					class="default-btn"
					:to="{
						name: 'checkout',
					}"
				>
					Checkout
				</router-link>
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

<style lang="css" scoped>
.item-counts{
        position: absolute;
    top: 9px;
    left: -26px;
    right: auto;
    width: 18px;
    height: 18px;
    background: #4fb68d;
    color: #fff;
    line-height: 18px;
    text-align: center;
    border-radius: 50%;
    float: right;
}
</style>
