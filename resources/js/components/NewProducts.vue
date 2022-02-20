<template>
    <section class="best-sells-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Best Sellers</h2>
                        <p>Add bestselling products to weekly line up</p>
                    </div>
                </div>
            </div>
            <carousel
                v-if="items.length > 0"
                :items="4"
                :nav="false"
                :dots="true"
                class="best-sell-slider"
            >
                <template v-for="item in items">
                    <ProductsList :item="item" />
                </template>
            </carousel>
        </div>
    </section>
</template>

<script>
import carousel from "vue-owl-carousel";
import ProductsList from "./ProductsList.vue";

export default {
    components: { carousel, ProductsList },
    data() {
        return {
            items: []
        };
    },
    methods: {
        
        getProducts() {
            axios
                .get(route("shop.products"))
                .then(res => {
                    console.log(res.data);
                    this.items = res.data.data;
                })
                .catch(err => {})
                .finally(() => {});
        }
    },
    mounted() {
        this.getProducts();
    }
};
</script>

<style lang="scss" scoped></style>
