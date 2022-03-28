<template>
	<article class="list-product">
		<div class="img-block">
			<router-link
				class="thumbnail"
				:to="{
					name: 'product-details',
					params: {
						id: item.id,
					},
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
							id: item.id,
						},
					}"
				>
					{{ item.title }}
				</router-link>
			</h2>
			<div class="rating-product">
				<star-rating
					v-model="item.comments_avg_rating"
					:star-size="20"
					:read-only="true"
					:show-rating="false"
				>
				</star-rating>
			</div>

			<div class="pricing-meta">
				<ul>
					<li class="old-price">Af {{ item.price }}</li>
					<li class="current-price">Af {{ item.discounted_price }}</li>
					<li class="discount-price">-{{ calculatePercentage(item) }}%</li>
				</ul>
			</div>
		</div>
		<div class="add-to-link">
			<ul>
				<li class="cart">
					<a class="cart-btn" href="javascript:;" @click="addProductToCart(item)"
						>ADD TO CART
					</a>
				</li>
			</ul>
		</div>
	</article>
</template>

<script>
import StarRating from 'vue-star-rating';
import { mapActions } from 'vuex';

export default {
	components: {
		StarRating,
	},
	props: {
		item: {
			type: Object,
			required: true,
		},
	},
	methods: {
		...mapActions({
			addProductToCart: 'cart/addProductToCart',
		}),
		calculatePercentage(item) {
			return parseFloat(100 - (item.discounted_price * 100) / item.price, 0).toFixed(0);
		},
	},
};
</script>
