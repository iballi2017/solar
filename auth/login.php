<!-- header -->
<?php
include '../components/header.php'
?>


<div id="login-page" class="bg-white">
    <div class="container auto-wrapper">
        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Sign in</li>
        </ul>
        <div class="title-wrapper">
            <hr class="my-0">
            <h1 class="title mb-0">SIGN IN</h1>
            <hr class="my-0">
        </div>


        <section>
            <div class="auth-form-container">
                <div class="card rounded-0">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" aria-describedby="username">
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
                            <button type="submit" class="btn btn-block btn-white rounded-0 bold-600">LOG IN</button>
                        </form>
                    </div>
                </div>

                <aside>
                    <p>DON’T HAVE AN ACCOUT? <a href="./register.php" class="success-link">REGISTER NOW</a></p>
                </aside>
            </div>
        </section>
    </div>

</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>