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
                <div class="main-content" id="user-purchase-details-content">
                    <!-- Purchase details -->

                    <div class="inner">
                        <div class="title px-3 py-2 bold">
                            <button class="px-0 btn mr-3">
                                <i class="fas fa-arrow-left"></i>
                            </button>Order Details
                        </div>
                        <div class="order-summary p-3">
                            <ul class="px-0 mb-0 list-style-none">
                                <li>1 Item</li>
                                <li>Placed on 28-12-2021</li>
                                <li>Total: ₦ 2,500</li>
                            </ul>
                        </div>

                        <hr class="horizontal-separator" />

                        <section class="p-3" id="order-items">
                            <h6>ITEMS IN YOUR ORDER</h6>
                            <div class="status p-3">
                                STATUS:&nbsp;&nbsp;DELIVERED
                            </div>
                            <ul class="px-0 mb-0 list-style-none item-list">
                                <!-- item 1 -->
                                <li class="item">
                                    <div class="item-details row p-3">
                                        <div class="img-wrapper col-4 col-md-2">
                                            <img src="../assets/images/product-images/product-2-image.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="name col-8 col-md-6">
                                            Title of product
                                        </div>
                                        <div class="qty col-4 col-md-2 text-center">
                                            <div class="label">Quantity</div>
                                            <div>1</div>
                                        </div>
                                        <div class="price col-8 col-md-2 text-center">
                                            <div class="label">Price</div>
                                            <div>₦ 2,500</div>
                                        </div>
                                    </div>
                                </li>
                                <!-- item 2 -->
                                <li class="item">
                                    <div class="item-details row p-3">
                                        <div class="img-wrapper col-4 col-md-2">
                                            <img src="../assets/images/product-images/product-2-image.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="name col-8 col-md-6">
                                            Title of product
                                        </div>
                                        <div class="qty col-4 col-md-2 text-center">
                                            <div class="label">Quantity</div>
                                            <div>1</div>
                                        </div>
                                        <div class="price col-8 col-md-2 text-center">
                                            <div class="label">Price</div>
                                            <div>₦ 2,500</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!--  -->
                        <section class="p-3" id="payment-delivery-info">

                            <div class="row">
                                <div id="payment-info" class="col-12 col-md-6">
                                    <div class="inner">
                                        <h6>PAYMENT INFORMATION </h6>
                                        <dl>
                                            <dt>Payment Method</dt>
                                            <dd>Bank Transfer / Third-party payment interface</dd>
                                            <!--  -->
                                            <dt>Payment Details</dt>
                                            <dd>Items total: ₦ 5000</dd>
                                        </dl>
                                        <p>Shipping Fees: </p>

                                        <p class="bold-600">Total: ₦ 5000</p>
                                    </div>
                                </div>
                                <div id="delivery-info" class="col-12 col-md-6">
                                    <div class="inner">
                                        <h6>DELIVERY INFORMATION </h6>
                                        <dl>
                                            <dt>Delivery Method</dt>
                                            <dd>Standard Door Delivery</dd>
                                            <!--  -->
                                            <dt>Shipping Address</dt>
                                            <dd>6a kolawole Shonibare Street, Ilupeju, Lagos Nigeria</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </section>
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