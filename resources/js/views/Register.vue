<template>
	<div>
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Register Page</h1>
							<ul class="breadcrumb-links">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>Register</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="login-register-area mb-60px mt-53px">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-12 ml-auto mr-auto">
						<div class="login-register-wrapper">
							<div class="login-register-tab-list nav">
								<a data-toggle="tab" href="#lg2">
									<h4>register</h4>
								</a>
							</div>

							<div class="login-form-container">
								<div class="login-register-form">
									<ValidationObserver ref="form" v-slot="{ handleSubmit }">
										<form @submit.prevent="handleSubmit(onSubmit)">
											<ValidationProvider
												name="Name"
												rules="required"
												v-slot="{ errors }"
												vid="name"
											>
												<div class="form-group">
													<input
														v-model="formData.name"
														type="text"
														name="name"
														placeholder="Name"
													/>

													<span class="text-danger text-sm">{{ errors[0] }}</span>
												</div>
											</ValidationProvider>
											<ValidationProvider
												name="Email"
												rules="required|email"
												v-slot="{ errors }"
												vid="email"
											>
												<div class="form-group">
													<input
														v-model="formData.email"
														type="text"
														name="email"
														placeholder="Email"
													/>

													<span class="text-danger text-sm">{{ errors[0] }}</span>
												</div>
											</ValidationProvider>
											<ValidationProvider
												name="Password"
												vid="password"
												rules="required|confirmed:password_confirmation"
												v-slot="{ errors }"
											>
												<div class="form-group">
													<input
														v-model="formData.password"
														type="password"
														name="password"
														placeholder="Password"
													/>
													<span class="text-danger text-sm">{{ errors[0] }}</span>
												</div>
											</ValidationProvider>
											<ValidationProvider
												name="Confirm Password"
												rules="required"
												vid="password_confirmation"
												v-slot="{ errors }"
											>
												<div class="form-group">
													<input
														v-model="formData.password_confirmation"
														type="password"
														name="password_confirmation"
														placeholder="Confirm Password"
													/>
													<span class="text-danger text-sm">{{ errors[0] }}</span>
												</div>
											</ValidationProvider>

											<div class="button-box">
												<button type="submit">
													<span>Register</span>
												</button>
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
</template>

<script>
import VsToast from '@vuesimple/vs-toast';
export default {
	data() {
		return {
			formData: {
				name: '',
				email: '',
				password: '',
				password_confirmation: '',
			},
		};
	},
	methods: {
		onSubmit() {
			this.$refs.form.validate().then((success) => {
				if (!success) {
					return;
				}
				axios
					.post(route('user.register'), this.formData)
					.then((res) => {
						if (res.data.status) {
							VsToast.success(res.data.message);
							this.$router.replace({ name: 'login' }).then(() => {});
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
};
</script>
