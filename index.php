<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <!-- Linked favicon  -->
    <link rel="shortcut icon" href="./assets/images/PMK_ERP_Logo.png" type="image/x-icon">

    <!-- Linked custom stylesheet -->
    <link rel="stylesheet" href="./styles/profile.css">
</head>

<body>
    <main class="container-width">
        <!-- section:: profile layout container  -->
        <section id="employee-profile-layout">
            <!-- profile sidebar container  -->
            <div id="profile-aside-sidebar">
                <!-- profile picture  -->
                <div class="profile-picture-container">
                    <figure id="profile-picture">
                        <img src="./assets/images/profile_picture_no_bg.png" alt="profile picture" id="profile">
                    </figure>
                    <div class="profile-content">
                        <h3 id="employee-name">Employee Name</h3>
                        <p class="employee-desk">
                            <span id="employee-designation">Designation</span> · <span id="employee-department">Department</span>
                        </p>
                        <h5 id="employee-id">Employee Id</h5>
                    </div>
                </div>

                <!-- employee personal information  -->
                <div class="employee-personal-info-container">
                    <h3 class="container-label">Personal Info</h3>

                    <div class="sidebar-card">
                        <!-- father name  -->
                        <div class="info-row">
                            <h5 class="ir-label">Father:</h5>
                            <p class="ir-value" id="employee-father-name">Name</p>
                        </div>

                        <!-- mother name  -->
                        <div class="info-row">
                            <h5 class="ir-label">Mother:</h5>
                            <p class="ir-value" id="employee-mother-name">Name</p>
                        </div>

                        <!-- date of birth  -->
                        <div class="info-row">
                            <h5 class="ir-label">Birth Date:</h5>
                            <p class="ir-value" id="employee-birth-date">yyy-mm-dd</p>
                        </div>

                        <!-- employee gender  -->
                        <div class="info-row">
                            <h5 class="ir-label">Gender:</h5>
                            <p class="ir-value" id="employee-gender">Male</p>
                        </div>

                        <!-- marital status  -->
                        <div class="info-row">
                            <h5 class="ir-label">Marital status:</h5>
                            <p class="ir-value" id="employee-marital-status">Unmarried</p>
                        </div>

                        <!-- employee religion  -->
                        <div class="info-row">
                            <h5 class="ir-label">Religion:</h5>
                            <p class="ir-value" id="employee-religion">Islam</p>
                        </div>

                        <!-- blood group  -->
                        <div class="info-row">
                            <h5 class="ir-label">Blood group:</h5>
                            <p class="ir-value" id="employee-blood-group">A-</p>
                        </div>

                        <!-- nid number  -->
                        <div class="info-row">
                            <h5 class="ir-label">NID:</h5>
                            <p class="ir-value" id="employee-nid">19900714728****</p>
                        </div>

                        <!-- passport number  -->
                        <div class="info-row">
                            <h5 class="ir-label">Passport:</h5>
                            <p class="ir-value" id="employee-passport">BJ 04938***</p>
                        </div>
                    </div>
                </div>

                <!-- employee contact information  -->
                <div class="employee-contact-info-container">
                    <h3 class="container-label">Contact</h3>

                    <div class="sidebar-card">
                        <!-- mobile  -->
                        <div class="contact-info-row">
                            <div class="ci-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone-call">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    <path d="M15 7a2 2 0 0 1 2 2" />
                                    <path d="M15 3a6 6 0 0 1 6 6" />
                                </svg>
                            </div>
                            <div class="c-info">
                                <h5 class="ci-label">Mobile</h5>
                                <p class="ci-value" id="employee-mobile-number">+880 1711-234***</p>
                            </div>
                        </div>

                        <!-- email  -->
                        <div class="contact-info-row">
                            <div class="ci-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                    <path d="M3 7l9 6l9 -6" />
                                </svg>
                            </div>
                            <div class="c-info">
                                <h5 class="ci-label">Email</h5>
                                <p class="ci-value" id="employee-email-address">email@mail.com</p>
                            </div>
                        </div>

                        <!-- present address  -->
                        <div class="contact-info-row">
                            <div class="ci-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
                                </svg>
                            </div>
                            <div class="c-info">
                                <h5 class="ci-label">Present Address</h5>
                                <p class="ci-value" id="employee-present-address">
                                    <span id="employee-present-upazila">Upazila</span>,<span id="employee-present-district">District</span>,<span id="employee-present-division">Division</span>-<span id="employee-present-postal-code">Postal Code</span>
                                </p>
                            </div>
                        </div>

                        <!-- permanent address  -->
                        <div class="contact-info-row">
                            <div class="ci-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6" />
                                </svg>
                            </div>
                            <div class="c-info">
                                <h5 class="ci-label">Permanent Address</h5>
                                <p class="ci-value" id="employee-permanent-address">
                                    <span id="employee-permanent-upazila">Upazila</span>,<span id="employee-permanent-district">District</span>,<span id="employee-permanent-division">Division</span>-<span id="employee-permanent-postal-code">Postal Code</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- employee  posting  -->
                <div class="employee-posting-container">
                    <h3 class="container-label">Current posting</h3>
                    <div class="sidebar-card">
                        <!-- branch name  -->
                        <div class="info-row">
                            <h5 class="ir-label">Branch:</h5>
                            <p class="ir-value" id="employee-posting-branch">Name</p>
                        </div>

                        <!-- branch code  -->
                        <div class="info-row">
                            <h5 class="ir-label">Code:</h5>
                            <p class="ir-value" id="employee-posting-branch-code">Code</p>
                        </div>

                        <!-- branch code  -->
                        <div class="info-row">
                            <h5 class="ir-label">Area:</h5>
                            <p class="ir-value" id="employee-posting-area">Code</p>
                        </div>

                        <!-- region name  -->
                        <div class="info-row">
                            <h5 class="ir-label">Region:</h5>
                            <p class="ir-value" id="employee-posting-region">Name</p>
                        </div>

                        <!-- area name  -->
                        <div class="info-row">
                            <h5 class="ir-label">Zone:</h5>
                            <p class="ir-value" id="employee-posting-zone">Name</p>
                        </div>

                        <!-- Reporting Boss -->
                        <div class="info-row">
                            <h5 class="ir-label">Reporting Boss:</h5>
                            <p class="ir-value" id="employee-posting-branch-code">Name</p>
                        </div>

                        <!-- designation -->
                        <div class="info-row">
                            <h5 class="ir-label">Designation</h5>
                            <p class="ir-value" id="employee-posting-branch">Designation</p>
                        </div>

                        <!-- department  -->
                        <div class="info-row">
                            <h5 class="ir-label">Department:</h5>
                            <p class="ir-value" id="employee-posting-department">Department</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- profile main content container  -->
            <div id="profile-main">
                main content
            </div>
        </section>
    </main>


    <!-- Linked custom script -->
    <script src="./js/profile.js"></script>
</body>

</html>