<template>
	<div>
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Single Product Page</h1>
							<ul class="breadcrumb-links">
								<li>
									<a href="/">Home</a>
								</li>
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
										alt
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
									<star-rating
										v-model="item.comments_avg_rating"
										:star-size="20"
										:read-only="true"
										:show-rating="false"
									></star-rating>
								</div>
								<span class="read-review">
									<a class="reviews" href="#"
										>Read reviews ({{ item.comments.length }})</a
									>
								</span>
							</div>
							<div class="pricing-meta">
								<ul>
									<li class="old-price not-cut">Af {{ item.price }}</li>
								</ul>
							</div>
							<p>{{ item.description }}</p>

							<div class="pro-details-social-info">
								<span>Share</span>
								<div class="social-info">
									<ul>
										<li>
											<ShareNetwork
												network="facebook"
												:url="currentUrl()"
												:title="item.title"
												:description="item.description"
											>
												<i class="ion-social-facebook"></i>
											</ShareNetwork>
										</li>
										<li>
											<ShareNetwork
												network="twitter"
												:url="currentUrl()"
												:title="item.title"
												:description="item.description"
											>
												<i class="ion-social-twitter"></i>
											</ShareNetwork>
										</li>
										<li>
											<ShareNetwork
												network="linkedin"
												:url="currentUrl()"
												:title="item.title"
												:description="item.description"
											>
												<i class="ion-social-linkedin"></i>
											</ShareNetwork>
										</li>
									</ul>
								</div>
								<!-- <div class="social-info">
									<ul>
										<li>
											<a href="#">
												<i class="ion-social-facebook"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="ion-social-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="ion-social-google"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="ion-social-instagram"></i>
											</a>
										</li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="description-review-area mb-60px" v-if="item">
			<div class="container">
				<div class="description-review-wrapper">
					<div class="description-review-topbar nav">
						<tabs
							:options="{
								useUrlFragment: false,
								defaultTabHash: 'Description',
							}"
						>
							<tab name="Description">
								<div class="product-description-wrapper">
									<p>{{ item.description }}</p>
								</div>
							</tab>
							<tab name="Reviews">
								<div class="row">
									<div class="col-lg-7">
										<div class="review-wrapper">
											<div
												class="single-review"
												v-for="(comment, index) in item.comments"
												:v-key="index"
											>
												<div class="review-img">
													<img src="assets/images/testimonial-image/2.png" alt />
												</div>
												<div class="review-content">
													<div class="review-top-wrap">
														<div class="review-left">
															<div class="review-name">
																<h4>{{ comment.name }}</h4>
															</div>
															<div class="rating-product">
																<star-rating
																	v-model="comment.rating"
																	:star-size="20"
																	:show-rating="false"
																></star-rating>
															</div>
														</div>
													</div>
													<div class="review-bottom">
														<p>
															{{ comment.comment }}
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="ratting-form-wrapper pl-50">
											<div class="ratting-form" v-if="loggedInUser">
												<h3>Add a Review</h3>
												<ValidationObserver ref="form" v-slot="{ handleSubmit }">
													<form @submit.prevent="handleSubmit(onSubmit)">
														<div class="star-box">
															<span> Your rating: </span>
															<div class="rating-product">
																<star-rating
																	v-model="form.rating"
																	:star-size="20"
																	:show-rating="false"
																></star-rating>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="rating-form-style form-submit">
																	<textarea
																		v-model="form.comment"
																		name="Your Review"
																		placeholder="Message"
																	></textarea>
																	<input type="submit" value="Submit to comment" />
																</div>
															</div>
														</div>
													</form>
												</ValidationObserver>
											</div>
											<h3 v-else>
												Please <router-link to="/login">Login</router-link> to give a
												comment.
											</h3>
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
import axios from 'axios';
import { Tabs, Tab } from 'vue-tabs-component';
import StarRating from 'vue-star-rating';
import VsToast from '@vuesimple/vs-toast';

export default {
	components: {
		Tabs,
		Tab,
		StarRating,
	},
	data() {
		return {
			userLoggedIn: '',
			loggedInUser: '',
			form: {
				rating: 0,
				name: null,
				email: null,
				comment: null,
				product_id: this.$route.params.id,
			},
			item: null,
		};
	},
	methods: {
		currentUrl() {
			return window.location.href;
		},
		onSubmit() {
			this.$refs.form.validate().then((success) => {
				if (!success) {
					return;
				}

				if (!this.form.rating) {
					VsToast.show({
						title: 'Error!',
						message: 'Please select rating',
						variant: 'error',
					});
					return false;
				}
				axios
					.post(route('product.comment'), this.form)
					.then((res) => {
						if (res.data.status) {
							VsToast.show({
								title: 'Success',
								message: res.data.message,
								variant: 'success',
							});
							this.getSingleProduct();
						}
					})
					.catch((err) => {
						if (err.response.status === 422) {
							this.$refs.form.setErrors(err.response.data.errors);
						}
						VsToast.show({
							title: 'Error!',
							message: err.response.data.message,
							variant: 'error',
						});
						console.log(err);
					});
			});
		},
		getSingleProduct() {
			axios
				.get(route('shop.product', { id: this.$route.params.id }))
				.then((res) => {
					this.item = res.data.data;
				})
				.catch((err) => {})
				.finally(() => {});
		},
	},
	mounted() {
		this.loggedInUser = JSON.parse(localStorage.getItem('company_user'));
		if (this.loggedInUser) {
			this.form.name = this.loggedInUser.name;
			this.form.email = this.loggedInUser.email;
		}
		this.getSingleProduct();
	},
};
</script>

<style>
.tabs-component-tabs {
	display: inline-flex;
}
.is-active a {
	color: #444 !important;
}
</style>
