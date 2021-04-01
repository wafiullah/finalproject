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
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
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
                                <ValidationObserver v-slot="{ handleSubmit}">  
                                <form @submit.prevent="handleSubmit(onSubmit)" class="contact-form-style" id="contact-form" action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife/assets/php/mail.php" method="post">
                               
                                    <div class="row">
                                         <ValidationProvider name="Name" rules="required|alpha" v-slot="{ errors }">
                                        <div class="col-lg-6">
                                            <input v-model="name" placeholder="Name*" type="text" class="form-control" />
                                            
                                        </div>
                                        <span> {{errors[0]}} </span>
                                        </ValidationProvider>
                                        <ValidationProvider name="Email" rules="required|email" v-slot="{ errors }">
                                        <div class="col-lg-6">
                                            <input v-model="email" placeholder="Email*" type="email" class="form-control" />
                                            
                                        </div>
                                        <span> {{errors[0]}} </span>
                                        </ValidationProvider>

                                        <ValidationProvider name="Subject" rules="required|min:5" v-slot="{ errors }">
                                        <div class="col-lg-6">
                                            <input v-model="subject" placeholder="Subject*" type="text" class="form-control" />
                                           
                                        </div>
                                         <span> {{errors[0]}} </span>
                                        </ValidationProvider>

                                        <ValidationProvider name="Message" rules="required|min:10" v-slot="{ errors }">
                                        <div class="col-lg-6">
                                            <input v-model="message" placeholder="Message*" type="text" class="form-control" />
                                            
                                        </div>
                                        <span> {{errors[0]}} </span><br>
                                        </ValidationProvider>
                                        <input type="submit" value="Send" class="btn btn-primary mt-3">
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
            name: '',
            eamil: '',
            subject: '',
            message: '',
            }
        }
    },
    methods: {
        onSubmit(){
            console.log(this.formData);
        }
    },
}
</script>