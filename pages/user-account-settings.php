<!-- header -->
<?php
include '../components/header.php'
?>

<div id="user-profile-page">
    <div class="bg-white pb-5">

        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li><a href="../">My Account</a></li>
                <li>Profile</li>
            </ul>


            <!-- title -->
            <div class="title-wrapper">
                <hr class="my-0">
                <h1 class="title mb-0">MY ACCOUNT</h1>
                <hr class="my-0">
            </div>


            <!-- sidenav toggler -->
            <div class="my-3">
                <button class="btn p-0" id="sidebar-toggler"><i class="fas fa-bars"></i></button>
            </div>

            
            <h6 class="user-greet">HELLO AKINOLA OLUWAKEMI</h6>

            <div id="user-content-wrapper">
                <div class="sidenav-wrapper">
                    <?php include '../components/user-sidenav.php'; ?>
                </div>
                <div class="main-content" id="user-account-settings-content">
                    <!-- Account settings -->
                    <div class="card rounded-0 mb-3">
                        <div class="card-header">
                            ACCOUNT SETTINGS
                        </div>
                        <div class="card-body">
                            <form action="#">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" aria-describedby="first name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" aria-describedby="last name">
                                    </div>
                                </div>

                                <!--  -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>

                                <button class="btn btn-white rounded-0 bold">SAVE</button>
                            </form>
                        </div>
                    </div>


                    <!-- Change password -->

                    <div class="card rounded-0">
                        <div class="card-header">
                            CHANGE PASSWORD
                        </div>
                        <div class="card-body">
                            <form action="#">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="oldPassword">Old Password</label>
                                        <input type="password" class="form-control" id="oldPassword" aria-describedby="Old password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>


                                <button class="btn btn-white rounded-0 bold">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- overlay -->
<?php
include '../components/overlay.php'
?>



<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>