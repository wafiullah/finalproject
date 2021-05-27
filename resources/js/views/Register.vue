<template>
    <div>
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-hrading">Register Page</h1>
                            <ul class="breadcrumb-links">
                                <li><a href="index.html">Home</a></li>
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
                                    <form action="" method="post">
                                        <input
                                            type="text"
                                            name="name"
                                            placeholder="Name"
                                        />
                                        <input
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                        />
                                        <input
                                            type="password"
                                            name="confirm-password"
                                            placeholder="Confirm Password"
                                        />
                                        <input
                                            name="user-email"
                                            placeholder="Email"
                                            type="email"
                                        />
                                        <div class="button-box">
                                            <button type="submit">
                                                <span>Register</span>
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
