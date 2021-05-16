<!-- header -->
<?php
include '../components/header.php'
?>

<div id="change-password-page" class="bg-white">
    <div class="container text-center">
        <div class="auth-form-container">
            <div class="inner">
                <div class="logo-img-wrapper">
                    <!-- logo -->
                    <img src="../assets/images/brand-logo.svg" alt="" class="img-fluid">
                </div>
                <form action="#">
                    <div class="card text-left">
                        <div class="card-header">
                            CHANGE PASSWORD
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" id="newPassword" aria-describedby="username">
                            </div>
                            <div class="form-group">
                                <label for="reTypePassword">Retype Password</label>
                                <input type="password" class="form-control" id="reTypePassword">
                            </div>
                            <hr class="my-5" />
                            <button type="submit" class="btn btn-block btn-white rounded-0 bold-600">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>




            <!-- change password success message -->
            <section id="success-message">
                <div class="inner">
                    <h1>PASSWORD CHANGED</h1>
                    <p>Go back to Home page or Sign in</p>
                </div>
            </section>
        </div>
    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer.php'
?>