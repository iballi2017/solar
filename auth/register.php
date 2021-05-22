<!-- header -->
<?php
include '../components/header.php'
?>


<div id="register-page" class="bg-white">
    <div class="container">
        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Register</li>
        </ul>
        <div class="title-wrapper">
            <hr class="my-0">
            <h1 class="title mb-0">REGISTER</h1>
            <hr class="my-0">
        </div>


        <section>
            <div class="auth-form-container">
                <div class="card rounded-0">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" aria-describedby="firstName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" aria-describedby="lastName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <p>
                                <small>
                                    <a href="./forgot-password.php" class="dark-link">Lost your password</a>
                                </small>
                            </p>
                            <button type="submit" class="btn btn-block btn-white rounded-0 bold-600">SIGN UP</button>
                        </form>
                    </div>
                </div>

                <aside>
                    <p>HAVE AN ACCOUT? <a href="./login.php" class="success-link">LOGIN</a></p>
                </aside>
            </div>
        </section>




        <!-- registration success message -->
        <section id="success-message">
            <div class="inner">
                <h1>REGISTERATION COMPLETE</h1>
                <p>Going back to the home screen in a seconds</p>
            </div>
        </section>
    </div>

</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>