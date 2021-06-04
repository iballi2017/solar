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
                <div class="main-content" id="user-purchase-history-content">
                    <!-- Purchase history -->
                    <div class="rounded-0 mb-3">
                        <div class="" id="table-header">
                            <div class="date-col">Date</div>
                            <div class="shipTo-col">Ship to</div>
                            <div class="totalPrice-col">Total price</div>
                            <div class="status-col">Status</div>
                            <div class="details-col">Details</div>
                        </div>
                        <div class="table-row">
                            <div class="date">10/12/2021</div>
                            <div class="shipTo">Ajaolabi Uwachukwu</div>
                            <div class="totalPrice">₦ 142,000</div>
                            <div class="status">Processing</div>
                            <div class="details">
                                <a href="./user-purchase-details.php" class="btn btn-sm btn-white rounded-0">Quick view</a>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="date">10/12/2021</div>
                            <div class="shipTo">Ajaolabi Uwachukwu</div>
                            <div class="totalPrice">₦ 142,000</div>
                            <div class="status">Delivered</div>
                            <div class="details">
                                <a href="./user-purchase-details.php" class="btn btn-sm btn-white rounded-0">Quick view</a>
                            </div>
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