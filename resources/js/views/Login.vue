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
                                    <form
                                        action=""
                                        method="post"
                                    >
                                        <input
                                            type="text"
                                            name="user-name"
                                            placeholder="Username"
                                        />
                                        <input
                                            type="password"
                                            name="user-password"
                                            placeholder="Password"
                                        />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a
                                                    class="flote-none"
                                                    href="javascript:void(0)"
                                                    >Remember me</a
                                                >
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit">
                                                <span>Login</span>
                                            </button>
                                        </div>
                                    </form>
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
export default {
    name: "Login",
    data() {
        return {};
    }
};
</script>
