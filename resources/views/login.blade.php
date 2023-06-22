    @include('partials._loginlogoutheader')

    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading"></div>
                <div class="row">
                    <div class="col-md-6 text-center my-auto"><img class="img-fluid"
                            src="assets/img/illustrations/login.jpg" width="400" height="250"></div>
                    <div class="col-md-5 col-xl-4 text-center text-md-start">
                        <h2 class="display-6 fw-semibold" style="color: #0d6efd;">Login</h2>
                        <p>Authorized Personnel Only</p>
                        <form method="post" style="padding-top: 20px;">
                            <div class="mb-3"><input class="shadow form-control" type="email" name="email"
                                    placeholder="Email"></div>
                            <div class="mb-3"><input class="shadow form-control" type="password" name="password"
                                    placeholder="Password"></div>
                            <div class="mb-5"><button class="btn btn-primary text-bg-warning shadow" type="submit"
                                    style="border-style: none;">Log in</button></div>
                            <p class="text-muted"><a class="fw-semibold link-primary text-decoration-none"
                                    href="forgetpassword.html">Forgot your password?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials._loginlogoutfooter')
