<template>
	<div>
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Shop Page</h1>
							<ul class="breadcrumb-links">
								<li><router-link to="/">Home</router-link></li>
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
										<option value="">Z to A</option>
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
										<div
											class="col-xl-3 col-md-4 col-sm-6"
											v-for="(item, index) in items"
											:key="index"
										>
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

													<div class="quick-view">
														<a
															class="quick_view"
															href="#"
															data-link-action="quickview"
															title="Quick view"
															data-toggle="modal"
															data-target="#exampleModal"
														>
															<i class="ion-ios-search-strong"></i>
														</a>
													</div>
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
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
														<i class="ion-android-star"></i>
													</div>
													<div class="pricing-meta">
														<ul>
															<li class="old-price">${{ item.price }}</li>
															<li class="current-price">${{ item.discounted }}</li>
															<li class="discount-price">-{{ calculatePercentage(item) }}%</li>
														</ul>
													</div>
												</div>
												<div class="add-to-link">
													<ul>
														<li class="cart">
															<router-link
																class="product-link"
																:to="{
																	name: 'product-details',
																	params: {
																		id: item.id,
																	},
																}"
															>
																View
															</router-link>
														</li>
													</ul>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
							<!-- Shop Tab Content End -->
							<!--  Pagination Area Start -->
							<!-- <div class="pro-pagination-style text-center">
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
							</div> -->
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
import axios from 'axios';

export default {
	name: 'Shop',
	data() {
		return {
			items: [],
		};
	},
	methods: {
        calculatePercentage(item){
            return parseFloat(item.discounted_price/item.price*100, 2).toFixed(2);
        },
		getProducts() {
			axios
				.get(route('shop.products'))
				.then((res) => {
                    console.log(res.data);
                    this.items = res.data.data;
                })
				.catch((err) => {})
				.finally(() => {});
		},
	},
    mounted () {
        this.getProducts();
    },
};
</script>
