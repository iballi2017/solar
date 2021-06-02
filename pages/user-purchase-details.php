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
                        <div class="title p-3">
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

                        <section class="item-list p-3">
                            <h6>ITEMS IN YOUR ORDER</h6>
                            <ul class="px-0 list-style-none">
                                <!-- item 1 -->
                                <li class="item-1">

                                </li>
                            </ul>
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