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
                            <span id="employee-designation">Program Manage</span> · <span id="employee-department">Program</span>
                        </p>
                        <h5 id="employee-id">Employee Id</h5>
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