<!-- header -->
<?php
include '../components/header.php'
?>

<div id="contact-us-page">
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
                <h1 class="title mb-0">CONTACT US</h1>
                <hr class="my-0">
            </div>


            <h2 class="aside mb-5">FOR MORE ENQUIRES ON INSTALLATION AND MAINTENANCE</h2>
            <div class="row">
                <div class="col-12 col-md-5">
                    <ul class="px-0 list-style-none bold-600">
                        <li>
                            <span>Email Address:</span>&nbsp;&nbsp;<span>info@mainlandsolar.com</span>
                        </li>
                        <li>
                            <span>Call:</span>&nbsp;&nbsp;<span>+2348099973409</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-7">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstname" aria-describedby="firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName">
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
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="request">Service Requested</label>
                                <input type="text" class="form-control" id="request">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-white rounded-0 bold-600">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>