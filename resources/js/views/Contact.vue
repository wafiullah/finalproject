<template>
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
                                <p>+012 345 678 102</p>
                                <p>+012 345 678 102</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="#">urname@email.com</a></p>
                                <p><a href="#">urwebsitenaem.com</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p>Address goes here,</p>
                                <p>street, Crossroad 123.</p>
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
                        <ValidationObserver v-slot="{ handleSubmit }">
                            <form
                                @submit.prevent="handleSubmit(onSubmit)"
                                class="contact-form-style"
                            >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <ValidationProvider
                                                name="Name"
                                                rules="required|alpha"
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
</template>

<script>
export default {
    name: "Contact",
    data() {
        return {
            formData: {
                name: "",
                eamil: "",
                subject: "",
                message: ""
            }
        };
    },
    methods: {
        onSubmit() {
            console.log(this.formData);
        }
    }
};
</script>
