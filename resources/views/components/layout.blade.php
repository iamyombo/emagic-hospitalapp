<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HospitalManager</title>
    <meta name="description"
        content="Hospital Manager Version 1.0 is design and developed by eMagic International lead by Mr. ADEMOLA MUNIRUDEEN OLUYOMBO has Lead Developer.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Calendar-No-Custom-Code.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    @include('partials._appmaintab')





    <main class="page login-page">
        @if (session()->has('success'))
            <div class="bg-opacity-50 bg-warning fw-semibold m-auto pb-1 pt-2 text-center text-white-100">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <section class="clean-block clean-form dark" style="padding-bottom: 120px;">
            <div class="container">

                {{ $slot }}

            </div>
        </section>
    </main>
    @include('partials.dashboard._footer')

</body>

</html>
