<template>
	<!-- Breadcrumb Area start -->
	<div>
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Checkout</h1>
							<ul class="breadcrumb-links">
								<li><a href="/">Home</a></li>
								<li>Checkout</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div v-if="$store.state.cart.checkoutStatus == 'empty' ">
			<div class="container" >
				<h3 class="text-dark text-center p-5">
					Your cart is empty, Please add <router-link to="/shop">Products</router-link> to cart. 
				</h3>
			</div>
		</div>
		<div v-else> 
		<div class="checkout-area mt-60px mb-40px" v-if="userLoggedIn ">
			<ValidationObserver ref="form" v-slot="{ handleSubmit }">
				<form @submit.prevent="handleSubmit(onSubmit)">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="billing-info-wrap">
									<h3>Shipping Details</h3>
										<div class="row">
											<div class="col-lg-12 col-md-12">
												<ValidationProvider
													name="Shipping Name"
													rules="required"
													v-slot="{ errors }"
													vid="shipping_name"
												>
													<div class="billing-info mb-20px">
														<label>Name</label>
														<input type="text" v-model="shipping.name" />
														<span class="text-danger text-sm">{{ errors[0] }}</span>
													</div>
												</ValidationProvider>
											</div>

											<div class="col-lg-12">
												<ValidationProvider
													name="Address"
													rules="required"
													v-slot="{ errors }"
													vid="shipping_address"
												>
													<div class="billing-info mb-20px">
														<label>Street Address</label>
														<input
															v-model="shipping.address"
															class="shipping-address"
															placeholder="House number and street name Apartment, suite, unit etc."
															type="text"
														/>
														<span class="text-danger text-sm">{{ errors[0] }}</span>
													</div>
												</ValidationProvider>
											</div>
											<div class="col-lg-12">
												<ValidationProvider
													name="City"
													rules="required"
													v-slot="{ errors }"
													vid="shipping_city"
												>
													<div class="billing-info mb-20px">
														<label>City</label>
														<input type="text" v-model="shipping.city" />
														<span class="text-danger text-sm">{{ errors[0] }}</span>
													</div>
												</ValidationProvider>
											</div>
											<div class="col-lg-6 col-md-6">
												<ValidationProvider
													name="State"
													rules="required"
													v-slot="{ errors }"
													vid="shipping_state"
												>
													<div class="billing-info mb-20px">
														<label>State</label>
														<input type="text" v-model="shipping.state" />
														<span class="text-danger text-sm">{{ errors[0] }}</span>
													</div>
												</ValidationProvider>
											</div>
											<div class="col-lg-6 col-md-6">
												<ValidationProvider
													name="Phone"
													rules="required"
													v-slot="{ errors }"
													vid="shipping_phone"
												>
													<div class="billing-info mb-20px">
														<label>Phone</label>
														<input type="text" v-model="shipping.phone" />
														<span class="text-danger text-sm">{{ errors[0] }}</span>
													</div>
												</ValidationProvider>
											</div>
										</div>
									<div class="additional-info-wrap">
										<h4>Additional information</h4>
										<div class="additional-info">
											<label>Order notes</label>
											<textarea
												placeholder="Notes about your order, e.g. special notes for delivery. "
												name="message"
												v-model="notes"
											></textarea>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-5">
								<div class="your-order-area">
									<h3>Your order</h3>
									<div class="your-order-wrap gray-bg-4">
										<div class="your-order-product-info">
											<div class="your-order-top">
												<ul>
													<li>Product</li>
													<li>Total</li>
												</ul>
											</div>
											<div class="your-order-middle">
												<ul>
													<li v-for="product in products">
														<span class="order-middle-left"
															>{{ product.title }} X {{ product.quantity }}</span
														>
														<span class="order-price">Af{{ product.price }} </span>
													</li>
												</ul>
											</div>
											<div class="your-order-bottom">
												<ul>
													<li class="your-order-shipping">Shipping</li>
													<li>Free shipping</li>
												</ul>
											</div>
											<div class="your-order-total">
												<ul>
													<li class="order-total">Total</li>
													<li>Af {{ total }}</li>
												</ul>
											</div>
										</div>
										<div class="payment-method">
											<div class="payment-accordion element-mrg">
												<div class="panel-group" id="accordion">
													<div class="panel payment-accordion">
														<div class="panel-heading" id="method-one">
															<h4 class="panel-title">
																<a
																	data-toggle="collapse"
																	data-parent="#accordion"
																	href="#method1"
																>
																	Select Payment Method
																</a>
															</h4>
														</div>
														<div id="method1" class="panel-collapse collapse show">
															<div class="panel-body">
																<ValidationProvider
																	name="Payment Method"
																	rules="required"
																	v-slot="{ errors }"
																	vid="payment_method"
																>
																	<div class="form-check">
																		<label class="form-check-label">
																			<input
																				type="radio"
																				class="form-check-input"
																				name="payment_method"
																				v-model="paymentMethod"
																				value="Cash on Delivery"
																			/>
																			Cash on Delivery
																		</label>
																	</div>
																	<div class="form-check">
																		<label class="form-check-label">
																			<input
																				type="radio"
																				v-model="paymentMethod"
																				class="form-check-input"
																				name="payment_method"
																				value="Bank Transfer"
																			/>
																			Bank Transfer
																		</label>
																	</div>
																	<span class="text-danger text-sm">{{ errors[0] }}</span>
																</ValidationProvider>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="Place-order mt-25">
										<button type="submit" class="order-btn">Place Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</ValidationObserver>
		</div>

		<div class="container" v-else>
			<h3 class="text-dark text-center p-5">
				You are not logged in, Please login <router-link to="/login">Here</router-link>
			</h3>
		</div>
		</div>
	</div>
</template>

<script>
import { mapGetters } from 'vuex';
import VsToast from '@vuesimple/vs-toast';
export default {
	data() {
		return {
			userLoggedIn: null,
			loggedInUser: null,
			paymentMethod: null,
			notes: null,
			checkoutStatus: null,
			shipping: {
				name: null,
				address: null,
				state: null,
				city: null,
				phone: null,
			},
			isActive: false,
		};
	},
	mounted() {
		this.loggedInUser = JSON.parse(localStorage.getItem("company_user"));
		this.userLoggedIn = localStorage.getItem('company_user_token');
		this.shipping.name = this.loggedInUser.name;
	},
	methods: {
		onSubmit() {
			this.$refs.form.validate().then((success) => {
				if (!success) {
					return;
				}
				let formData = new Array();

				formData = {
					...{ shipping: this.shipping },
					...{ notes: this.notes },
					...{ paymentMethod: this.paymentMethod },
					...{ cart: this.products },
					...{ userId: this.loggedInUser.id },
				};
				axios
					.post(route('checkout'), formData)
					.then((res) => {
						console.log(res);
						if (res.data.status) {
							VsToast.success(res.data.message);
							this.$refs.form.reset();
							this.$store.commit('cart/emptyCart');
							this.$store.commit('cart/setCheckoutStatus', 'empty');
							// this.$router.replace({ name: 'login' }).then(() => {});
						}
					})
					.catch((err) => {
						if (err.response.status === 422) {
							this.$refs.form.setErrors(err.response.data.errors);
						}
						VsToast.error(err.response.data.message);
					});
			});
		},
	},
	computed: {
		...mapGetters('cart', {
			products: 'cartProducts',
			total: 'cartTotal',
		}),
	},
};
</script>
