<!-- header -->
<?php
include '../components/header.php'
?>


<div id="solar-audit-page">
    <div id="schedule-audit-request">
        <div id="checkout">
            <div class="bg-white">
                <div class="container">
                    <!-- breadcrumb -->
                    <ul class="breadcrumb">
                        <li><a href="../">Home</a></li>
                        <li>Schedule a Audit Request</li>
                    </ul>

                    <div class="title-wrapper">
                        <hr class="my-0">
                        <h1 class="title mb-0">SCHEDULE A AUDIT REQUEST</h1>
                        <hr class="my-0">
                    </div>

                    <!-- Progress bar -->
                    <div class="audit-progress-bar">
                        <ul class="list-style-none pl-0 labels">
                            <li>SELECT A DATE </li>
                            <li>PICK A TIME </li>
                            <li>CHECKOUT </li>
                        </ul>
                        <ul class="list-style-none pl-0 indicators">
                            <li class="active">
                                <div class="ball"></div>
                            </li>
                            <li class="active">
                                <div class="ball"></div>
                            </li>
                            <li class="active">
                                <div class="ball"></div>
                            </li>
                        </ul>

                    </div>

                    <div class="row no-gutters">
                        <div class="col-12 col-md-7 col-lg-8">
                            <form action="#" class="m-1">
                                <div class="card mb-2">
                                    <div class="card-header">
                                        PERSONAL DETAILS
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-12 col-sm-6">
                                                <label for="firstName">First Name</label>
                                                <input id="firstName" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <label for="lastName">Last Name</label>
                                                <input id="lastName" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12 col-sm-6">
                                                <label for="phone">Phone Number</label>
                                                <input id="phone" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <label for="email">Email Address</label>
                                                <input id="email" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label for="streetAddress">Street Address</label>
                                                <input id="streetAddress" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        PAYMENT METHOD
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="px-3 py-2">
                                            <ul class="row list-style-none pl-0 mb-0">
                                                <li class="col-12 col-md-5">
                                                    <input class="radio" type="radio" name="payment-method" id="bankTransfer">
                                                    <label for="bankTransfer">
                                                        <span>Bank Transfer</span>
                                                        <span class="ui-radio"></span>
                                                    </label>
                                                </li>
                                                <li class="col-12 col-md-5">
                                                    <input class="radio" type="radio" name="payment-method" id="paystack">
                                                    <label for="paystack">
                                                        <span>Paystack</span>
                                                        <span class="ui-radio"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="bank-account-details" class="px-3 d-none">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="label">Bank name:</th>
                                                        <td class="bank-name">ZENITH BANK</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="label">Account number:</th>
                                                        <td class="account-number">08764818363</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-3 border-top">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button class="btn btn-sm btn-white rounded-0">GO BACK</button>
                                                <a href="#" class="btn btn-sm btn-success rounded-0">PLACE YOUR ORDER</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-5 col-lg-4">
                            <div class="card border-0 m-1">
                                <div class="card-header">
                                    BOOKING SUMMARY
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-bordered">
                                        <!-- <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <tr>
                                                <th scope="row">Selected Date</th>
                                                <td>28, JANUARY, 2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Selected Time</th>
                                                <td>3:00pm - 5:00pm</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Price</th>
                                                <td>₦ 15,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>




<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>