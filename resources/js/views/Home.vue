<template>
    <div>
        <Slider />
        <NewProducts />
    </div>
</template>

<script>
import Slider from "../components/Slider";
import NewProducts from "../components/NewProducts.vue";
export default {
    components: {
        Slider,
        NewProducts
    }
};
</script>
