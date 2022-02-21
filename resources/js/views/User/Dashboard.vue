<template>
	<div>
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Account Page</h1>
							<ul class="breadcrumb-links">
								<li><a href="/">Home</a></li>
								<li>My Account</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->
		<!-- account area start -->
		<div class="checkout-area mtb-60px">
			<div class="container">
				<div class="row">
					<div class="ml-auto mr-auto col-lg-9">
						<div class="checkout-wrapper">
							<div id="faq" class="panel-group">
								<div class="panel panel-default single-my-account">
									<div class="panel-heading my-account-title">
										<h3 class="panel-title">
											<span>1 .</span>
											<a data-toggle="collapse" data-parent="#faq" href="#my-account-1"
												>Edit your account information
											</a>
										</h3>
									</div>
									<div id="my-account-1" class="panel-collapse collapse show">
										<div class="panel-body">
											<div class="myaccount-info-wrapper">
												<div class="account-info-wrapper">
													<h4>My Account Information</h4>
													<h5>Your Personal Details</h5>
												</div>
												<ValidationObserver ref="form" v-slot="{ handleSubmit }">
													<form @submit.prevent="handleSubmit(onSubmit)">
														<div class="row">
															<div class="col-lg-6 col-md-6">
																<div class="billing-info">
																	<label>First Name</label>
																	<ValidationProvider
																		name="Name"
																		rules="required"
																		v-slot="{ errors }"
																		vid="name"
																	>
																		<input
																			v-model="form.name"
																			type="text"
																			name="name"
																			placeholder="Name"
																		/>

																		<span class="text-danger text-sm">{{
																			errors[0]
																		}}</span>
																	</ValidationProvider>
																</div>
															</div>
															<div class="col-lg-6 col-md-6">
                                                            <label>Email</label>
																<ValidationProvider
																	name="Email"
																	rules="required|email"
																	v-slot="{ errors }"
																	vid="email"
																>
																	<div class="billing-info">
																		<input
																			v-model="form.email"
																			type="text"
																			name="email"
																			placeholder="Email"
																		/>

																		<span class="text-danger text-sm">{{
																			errors[0]
																		}}</span>
																	</div>
																</ValidationProvider>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12 col-md-12">
																<div class="billing-info">
																	<label>Password</label>
																	<ValidationProvider
																		name="Password"
																		vid="password"
																		rules="confirmed:password_confirmation"
																		v-slot="{ errors }"
																	>
																		<input
																			v-model="form.password"
																			type="password"
																			name="password"
																			placeholder="Password"
																		/>
																		<span class="text-danger text-sm">{{
																			errors[0]
																		}}</span>
																	</ValidationProvider>
																</div>
															</div>
															<div class="col-lg-12 col-md-12">
																<div class="billing-info">
																	<label>Password Confirm</label>
																	<ValidationProvider
																		name="Confirm Password"
																		vid="password_confirmation"
																		v-slot="{ errors }"
																	>
																		<input
																			v-model="form.password_confirmation"
																			type="password"
																			name="password_confirmation"
																			placeholder="Confirm Password"
																		/>
																		<span class="text-danger text-sm">{{
																			errors[0]
																		}}</span>
																	</ValidationProvider>
																</div>
															</div>
														</div>
														<div class="billing-back-btn">
															<div class="billing-btn">
																<button type="submit">Update</button>
															</div>
														</div>
													</form>
												</ValidationObserver>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import VsToast from "@vuesimple/vs-toast";

export default {
	components: {},
	data() {
		return {
			userLoggedIn: '',
			loggedInUser: '',
			form: {
				name: null,
				email: null,
				password: null,
				confirm_password: null,
			},
		};
	},
     methods: {
        onSubmit() {
            this.$refs.form.validate().then(success => {
                if (!success) {
                    return;
                }
                axios
                    .post(route("user.profile"), this.form)
                    .then(res => {
                        if (res.data.status) {
                            this.form.name = res.data.user.name;
		                    this.form.email = res.data.user.email;
                              localStorage.setItem(
                                "company_user",
                               JSON.stringify( res.data.user)
                            );
                            VsToast.show({
                                title: "Success",
                                message: res.data.message,
                                variant: "success"
                            });
                        }
                    })
                    .catch(err => {
                        if (err.response.status === 422) {
                            this.$refs.form.setErrors(err.response.data.errors);
                        }
                        VsToast.show({
                            title: "Error!",
                            message: err.response.data.message,
                            variant: "error"
                        });
                    });
            });
        }
    },
	mounted() {
		this.userLoggedIn = localStorage.getItem('company_user_token');
		this.loggedInUser = JSON.parse(localStorage.getItem('company_user'));
		this.form.name = this.loggedInUser.name;
		this.form.email = this.loggedInUser.email;
	},
};
</script>

<style lang="scss" scoped></style>
