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
                <div class="main-content" id="user-wishlist-content">
                    <!-- Wishlist -->
                    <div class="rounded-0 mb-3">
                        <div class="" id="table-header">
                            <div class="productName-col">Product Name</div>
                            <div class="price-col">Price</div>
                            <div class="action-col"></div>
                        </div>
                        <div class="table-row">
                            <div class="productName">
                                <!-- <span class="mr-1">Title of product</span> -->
                                <span class="mr-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates esse blanditiis, expedita voluptatum itaque officia nesciunt ab repellat cupiditate?</span>
                                <button class="view-item btn btn-sm btn-success rounded-0" onclick="openPreview()">Quick view</button>
                            </div>
                            <div class="price">₦ 71,000</div>
                            <div class="action"><button href="#" class="btn btn-sm btn-white rounded-0">ADD TO CART</button></div>
                        </div>
                        <!--  -->
                        <div class="table-row">
                            <div class="productName">
                                <!-- <span class="mr-1">Title of product</span> -->
                                <span class="mr-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates esse blanditiis, expedita voluptatum itaque officia nesciunt ab repellat cupiditate?</span>
                                <button class="view-item btn btn-sm btn-success rounded-0" onclick="openPreview()">Quick view</button>
                            </div>
                            <div class="price">₦ 71,000</div>
                            <div class="action"><button href="#" class="btn btn-sm btn-white rounded-0">ADD TO CART</button></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <!-- item prieview -->
        <div class="preview-wrapper">
            <?php
            include '../components/item-preview.php';
            ?>
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