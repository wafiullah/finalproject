<template>
<div>
<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-content">
							<h1 class="breadcrumb-hrading">Contact Us</h1>
							<ul class="breadcrumb-links">
								<li><a href="/">Home</a></li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
    <div class="contact-area mtb-60px">
        <div class="container">
            <!-- <div class="contact-map mb-10">
    
                            <div id="mapid"></div>
    
                        </div> -->

            <div class="custom-row-2">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="contact-info-dec">
                                <p>+93 73 094 4532</p>

                                <p>+93 776 467 017</p>
                            </div>
                        </div>

                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-globe"></i>
                            </div>

                            <div class="contact-info-dec">
                                <p><a href="#">khadija.sadiqi@email.com</a></p>

                                <p><a href="#">urwebsitenaem.com</a></p>
                            </div>
                        </div>

                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>

                            <div class="contact-info-dec">
                                <p>Address goes here,</p>

                                <p>Kabul,Paghman ,Qargha.</p>
                            </div>
                        </div>

                        <div class="contact-social">
                            <h3>Follow Us</h3>

                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a href="#"
                                            ><i class="ion-social-facebook"></i
                                        ></a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            ><i class="ion-social-twitter"></i
                                        ></a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            ><i class="ion-social-youtube"></i
                                        ></a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            ><i class="ion-social-google"></i
                                        ></a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            ><i class="ion-social-instagram"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2>Get In Touch</h2>
                        </div>

                        <ValidationObserver v-slot="{ handleSubmit }" ref="form">
                            <form
                                @submit.prevent="handleSubmit(onSubmit)"
                                class="contact-form-style"
                            >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <ValidationProvider
                                                name="Name"
                                                rules="required"
                                                v-slot="{ errors }"
                                            >
                                                <input
                                                    v-model="formData.name"
                                                    placeholder="Name*"
                                                    type="text"
                                                    class="form-control"
                                                />

                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ errors[0] }}</span
                                                >
                                            </ValidationProvider>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <ValidationProvider
                                                name="Email"
                                                rules="required|email"
                                                v-slot="{ errors }"
                                            >
                                                <input
                                                    v-model="formData.email"
                                                    placeholder="Email*"
                                                    type="email"
                                                    class="form-control"
                                                />

                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ errors[0] }}</span
                                                >
                                            </ValidationProvider>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ValidationProvider
                                                name="Subject"
                                                rules="required|min:5"
                                                v-slot="{ errors }"
                                            >
                                                <input
                                                    v-model="formData.subject"
                                                    placeholder="Subject*"
                                                    type="text"
                                                    class="form-control"
                                                />

                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ errors[0] }}</span
                                                >
                                            </ValidationProvider>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ValidationProvider
                                                name="Message"
                                                rules="required"
                                                v-slot="{ errors }"
                                            >
                                                <textarea
                                                    v-model="formData.message"
                                                    placeholder="Message*"
                                                    class="form-control"
                                                />

                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ errors[0] }}</span
                                                >
                                            </ValidationProvider>

                                            <button
                                                class="submit"
                                                type="submit"
                                            >
                                                SEND
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </ValidationObserver>

                        <p class="form-messege"></p>
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
    data() {
        return {
            formData: {
                name: "",
                email: "",
                subject: "",
                message: ""
            }
        };
    },
    methods: {
        onSubmit() {
            this.$refs.form.validate().then(success => {
                if (!success) {
                    return;
                }
                axios
                    .post(route("contact.store"), this.formData)
                    .then(res => {
                        console.log(res.data);
                        if (res.data.status) {
                           this.resetForm();
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
                        console.log(err);
                    });
            });
        },
        resetForm(){
            this.formData.name = null;
            this.formData.email = null;
            this.formData.subject = null;
            this.formData.message = null;
        }
    }
};
</script>
