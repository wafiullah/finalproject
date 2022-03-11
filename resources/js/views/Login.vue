<template>
    <div>
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-hrading">Login Page</h1>
                            <ul class="breadcrumb-links">
                                <li><a href="index.html">Home</a></li>
                                <li>Login</li>
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
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4>login</h4>
                                </a>
                            </div>
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <ValidationObserver
                                        ref="form"
                                        v-slot="{ handleSubmit }"
                                    >
                                        <form
                                            @submit.prevent="
                                                handleSubmit(onSubmit)
                                            "
                                            class="contact-form-style"
                                        >
                                            <ValidationProvider
                                                name="Email"
                                                rules="required|email"
                                                v-slot="{ errors }"
                                            >
                                                <div class="form-group">
                                                    <input
                                                        v-model="formData.email"
                                                        type="text"
                                                        name="email"
                                                        placeholder="Email"
                                                    />

                                                    <span
                                                        class="text-danger text-sm"
                                                        >{{ errors[0] }}</span
                                                    >
                                                </div>
                                            </ValidationProvider>
                                            <ValidationProvider
                                                name="Password"
                                                rules="required"
                                                v-slot="{ errors }"
                                            >
                                                <div class="form-group">
                                                    <input
                                                        v-model="
                                                            formData.password
                                                        "
                                                        type="password"
                                                        name="password"
                                                        placeholder="Password"
                                                    />
                                                    <span
                                                        class="text-danger text-sm"
                                                        >{{ errors[0] }}</span
                                                    >
                                                </div>
                                            </ValidationProvider>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a
                                                        class="flote-none"
                                                        href="javascript:void(0)"
                                                        >Remember me</a
                                                    >
                                                </div>
                                                <button type="submit">
                                                    <span>Login</span>
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
import VsToast from "@vuesimple/vs-toast";
export default {
    data() {
        return {
            formData: {
                email: "",
                password: ""
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
                    .post(route("user.authenticate"), {
                        email: this.formData.email,
                        password: this.formData.password
                    })
                    .then(res => {
                        if (res.data.company_user_token) {
                            localStorage.setItem(
                                "company_user_token",
                                res.data.company_user_token
                            );
                              localStorage.setItem(
                                "company_user",
                               JSON.stringify( res.data.company_user)
                            );
                            // this.$router
                            //     .replace({ name: "dashboard" })
                            //     .then(() => {});
                            window.location = '/'
                        } else {
                            // this.ToasterFailed("Something went wrong.");
                        }
                    })
                    .catch(err => {
                        VsToast.show({
                            title: "Error!",
                            message: err.response.data.message,
                            variant: "error"
                        });
                        console.log(err);
                    });
            });
        }
    },
    beforeCreate () {
        if(JSON.parse(localStorage.getItem("company_user"))){
              this.$router.push({
                name: 'dashboard'
            })
        }
    },
};
</script>
