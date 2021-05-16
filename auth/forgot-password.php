<!-- header -->
<?php
include '../components/header.php'
?>

<div id="forgot-password-page" class="bg-white">
    <div class="container text-center">
        <div class="auth-form-container">
            <div class="inner">
                <div class="logo-img-wrapper">
                    <!-- logo -->
                    <img src="../assets/images/brand-logo.svg" alt="" class="img-fluid">
                </div>
                <h1 class="title">FORGOT PASSWORD</h1>
                <p>Please enter the email address you registered with. We will send you a link</p>
                <div class="form-wrapper">
                    <form action="#">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" aria-label="Newsletter subscription" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-white rounded-0" type="button" id="button-addon2">SEND LINK</button>
                            </div>
                    </form>
                </div>

                <!-- success message -->
                <p class="text-successColor bold-600 my-3">Please check the email you gave</p>
            </div>
        </div>
    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer.php'
?>