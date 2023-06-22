    @include('partials._loginlogoutheader')

    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading"></div>
                <div class="row">
                    <div class="col-md-6 text-center my-auto"><img class="img-fluid"
                            src="assets/img/illustrations/logout.png" width="400" height="250"
                            style="filter: grayscale(84%);"></div>
                    <div class="col-md-5 col-xl-4 text-center text-md-start">
                        <h6 class="display-6 fw-semibold" style="color: var(--bs-red);font-size: 35px;">You're Logged
                            Out</h6>
                        <p>Thanks and Enjoy the rest of the day.</p><a
                            class="text-capitalize fw-semibold text-decoration-none" href="/login"
                            style="margin-top: 0px;">Back to Login&nbsp;</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials._loginlogoutfooter')
