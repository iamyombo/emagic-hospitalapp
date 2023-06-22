<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - HospitalManager</title>
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
    <main class="page">
        <section class="clean-block clean-form dark" style="padding-bottom: 120px;">
            <div class="container">
                @include('partials._appusertab')
                @include('partials.dashboard._stats')
                @include('partials.dashboard._menu')

                <div style="margin-bottom: 0px;padding-bottom: 30px;">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation" id="tab-search-patients"><a
                                class="nav-link active text-uppercase fw-semibold" role="tab" data-bs-toggle="tab"
                                href="#tab-1" style="color: var(--bs-dark);"><span
                                    style="color: rgb(18, 141, 228); background-color: var(--bs-card-bg);">Search
                                    Patients</span></a></li>
                        <li class="nav-item" role="presentation" id="tab-appointment-booking"><a
                                class="nav-link text-uppercase fw-semibold link-primary" role="tab"
                                data-bs-toggle="tab" href="#tab-2"><span
                                    style="color: var(--bs-nav-link-hover-color); background-color: rgba(0, 0, 0, 0.03);">Appointment
                                    Booking</span></a></li>
                        <li class="nav-item" role="presentation" id="tab-hospital-card"><a
                                class="nav-link text-uppercase fw-semibold link-primary" role="tab"
                                data-bs-toggle="tab" href="#tab-3"><span
                                    style="color: var(--bs-nav-link-hover-color); background-color: rgba(0, 0, 0, 0.03);">Hospital
                                    Card Registration</span></a></li>
                        <li class="nav-item" role="presentation" id="tab-hmo"><a
                                class="nav-link text-uppercase fw-semibold link-primary" role="tab"
                                data-bs-toggle="tab" href="#tab-4"><span
                                    style="color: var(--bs-nav-link-hover-color); background-color: rgba(0, 0, 0, 0.03);">HMO&nbsp;</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div style="padding: 10px;">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p>Enter Patient Names or Card Number&nbsp;</p>
                                        </div>
                                        <div class="col text-end"><a
                                                class="text-uppercase fw-semibold text-bg-warning bg-warning border-0 text-decoration-none"
                                                href="patients.html"
                                                style="padding: 10px;border-style: none;padding-right: 15px;padding-left: 15px;">patient's
                                                Page</a></div>
                                    </div>
                                </div>
                                <form class="d-flex float-start" action="patients.html" method="post"
                                    style="width: 500px;">
                                    <input class="form-control" type="search" name="searchpatient"
                                        placeholder="Search Patient" style="font-size: 14px;" required="">

                                    <button class="btn btn-warning fw-semibold" type="submit"
                                        style="padding-left: 12px;margin: 5px;">go</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div style="padding: 10px;">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p>Book an appointment to meet with the consultant.</p>
                                        </div>
                                        <div class="col text-end"><a
                                                class="text-uppercase fw-semibold text-bg-warning bg-warning border-0 text-decoration-none"
                                                href="appointments.html"
                                                style="padding: 10px;border-style: none;padding-right: 15px;padding-left: 15px;">appointment
                                                Page</a></div>
                                    </div>
                                </div>
                                <form class="float-start" action="appointments.html" method="post"
                                    style="width: 500px;"><label class="form-label fw-semibold">Select Patient
                                        Name</label><input class="form-control" type="text" id="patientnamebyid"
                                        name="patientname" placeholder="Enter Patient Name"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><label
                                        class="form-label fw-semibold">Select Date</label><input class="form-control"
                                        id="selectdate" type="date" required="" name="appointmentdate"
                                        style="margin-bottom: 20px;"><label class="form-label fw-semibold">Select
                                        Start Time</label><input class="form-control" id="timestart" type="time"
                                        name="startuptime" style="margin-bottom: 20px;"><label
                                        class="form-label fw-semibold">Select Expect End Time</label><input
                                        class="form-control" id="endtime" type="time" name="expendtime"
                                        style="margin-bottom: 20px;">
                                    <textarea class="form-control" id="notes" placeholder="Enter Additional Notes..." style="margin-bottom: 20px;"></textarea><label class="form-label fw-semibold">Select Preferred
                                        Doctor</label>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-1" checked=""><label class="form-check-label"
                                            for="formCheck-1">Any</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-2"><label class="form-check-label" for="formCheck-2">Dr.
                                            Akinwunmi</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-3"><label class="form-check-label" for="formCheck-3"
                                            style="margin-bottom: 30px;">Dr. Akanbi&nbsp;</label></div><button
                                        class="btn btn-primary fw-semibold link-dark text-bg-warning" type="submit"
                                        style="margin-top: 10px;border-style: none;">Schedule Appointment</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <div style="padding: 10px;">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p>Register New Hospital Card.</p>
                                        </div>
                                        <div class="col text-end"><a
                                                class="text-uppercase fw-semibold text-bg-warning bg-warning border-0 text-decoration-none"
                                                href="hospitalcards.html"
                                                style="padding: 10px;border-style: none;padding-right: 15px;padding-left: 15px;">hospital
                                                card Page</a></div>
                                    </div>
                                </div>
                                <form class="float-start" action="hospitalcards.html" method="post"
                                    style="width: 500px;"><label class="form-label fw-semibold">Card Tag
                                        #</label><input class="form-control" type="text" id="patientnamebyid-1"
                                        name="cardtagno" placeholder="Enter Card Tag #"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><label
                                        class="form-label fw-semibold">Name on Card</label><input class="form-control"
                                        type="text" id="patientnamebyid-2" name="nameoncard"
                                        placeholder="Name On Card" style="font-size: 14px;margin-bottom: 20px;"
                                        required=""><label class="form-label fw-semibold">Select Card Type</label>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="cardtypeself" name="cardtype"><label class="form-check-label"
                                            for="formCheck-4">Self</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="cardtypefamily" name="cardtype"><label class="form-check-label"
                                            for="cardtype-1">Family</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="cardtypecompany" name="cardtype"><label class="form-check-label"
                                            for="cardtype-2">Company</label></div>
                                    <div class="form-check" style="margin-bottom: 20px;"><input
                                            class="form-check-input" type="radio" id="cardtypeselfplus"
                                            name="cardtype"><label class="form-check-label" for="cardtype-3">Self
                                            Plus</label></div><label class="form-label fw-semibold">Card
                                        Funding</label>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="fundingself" name="funding"><label class="form-check-label"
                                            for="formCheck-4">SELF</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="fundinghmo" name="funding"><label class="form-check-label"
                                            for="formCheck-5">HMO</label></div><button
                                        class="btn btn-primary fw-semibold text-bg-warning" type="submit"
                                        style="margin-top: 30px;border-style: none;">Create Hospital Card</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-4">
                            <div style="padding: 10px;">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p>Add HMO -&nbsp;Health Maintenance Organization</p>
                                        </div>
                                        <div class="col text-end"><a
                                                class="text-uppercase fw-semibold text-bg-warning bg-warning border-0 text-decoration-none"
                                                href="hmos.html"
                                                style="padding: 10px;border-style: none;padding-right: 15px;padding-left: 15px;">HMO
                                                Page</a></div>
                                    </div>
                                </div>
                                <form class="float-start" action="hmo.html" method="post" style="width: 1800px;"
                                    enctype="multipart/form-data"><label
                                        class="form-label fw-semibold">Name</label><input class="form-control"
                                        type="text" id="hmo-name" name="hmoname" placeholder="Enter HMO Name"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><label
                                        class="form-label fw-semibold">Upload HMO Logo</label><input
                                        class="form-control" type="file" id="hmofile" name="nameoncard"
                                        placeholder="Name On Card" style="font-size: 14px;margin-bottom: 20px;"
                                        required=""><label class="form-label fw-semibold">Category</label>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="hmocategoryprivate" name="hmocategory"><label
                                            class="form-check-label" for="fundingself-1">Private Owned</label></div>
                                    <div class="form-check" style="margin-bottom: 20px;"><input
                                            class="form-check-input" type="radio" id="hmocategorygovt"
                                            name="hmocategory"><label class="form-check-label"
                                            for="fundinghmo-1">Government Owned</label></div><label
                                        class="form-label fw-semibold">Country</label><input class="form-control"
                                        type="text" id="hmocountry" name="hmocountry"
                                        placeholder="Enter HMO Country" style="font-size: 14px;margin-bottom: 20px;"
                                        required=""><label class="form-label fw-semibold">State</label><input
                                        class="form-control" type="text" id="hmostate" name="hmostate"
                                        placeholder="Enter HMO State" style="font-size: 14px;margin-bottom: 20px;"
                                        required=""><label class="form-label fw-semibold">City</label><input
                                        class="form-control" type="text" id="hmocity" name="hmocity"
                                        placeholder="Enter HMO City" style="font-size: 14px;margin-bottom: 20px;"
                                        required=""><label class="form-label fw-semibold">Office Address</label>
                                    <textarea class="form-control" id="hmoaddress" style="margin-bottom: 20px;" placeholder="Enter HMO Office Address"></textarea><label class="form-label fw-semibold">Postal/Zip
                                        Code</label><input class="form-control" type="text" id="hmopostalcode"
                                        name="hmopostalzipcode" placeholder="Enter Postal/Zip Code"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><label
                                        class="form-label fw-semibold">Phone</label><input class="form-control"
                                        type="text" id="hmo-phone" name="hmophone" placeholder="Enter Phone#"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><label
                                        class="form-label fw-semibold">Email</label><input class="form-control"
                                        type="email" id="hmo-email" name="hmoemail" placeholder="Enter Email"
                                        style="font-size: 14px;margin-bottom: 20px;" required=""><button
                                        class="btn btn-primary fw-semibold text-bg-warning" type="submit"
                                        style="margin-top: 30px;border-style: none;">Create HMO</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials.dashboard._footer')

</body>

</html>
