<!-- header -->
<?php
include '../components/header.php'
?>

<div id="shopping-cart-page">
    <div class="bg-white pb-5">

        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li>Cart</li>
            </ul>


            <!-- title -->
            <div class="title-wrapper">
                <hr class="my-0">
                <h1 class="title mb-0">CART</h1>
                <hr class="my-0">
            </div>

            <!-- shopping cart header -->'
            <div id="shopping-cart-header">
                <div class="inner">
                    <div class="image-col">Image</div>
                    <div class="name-col">Product Name</div>
                    <div class="quantity-col">Quantity</div>
                    <div class="price-col">Price</div>
                    <div class="sub-total-col">Sub-total</div>
                </div>
            </div>
            <!-- product 1 -->
            <div class="item-row">
                <div class="item-image-col">
                    <div class="item-image-wrapper">
                        <img src="../assets/images/product-images/product-1-image.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="item-name-col">

                    <div class="py-2 item-name-wrapper">
                        <div class="item-name">Title of product</div>
                        <button class="view-item btn btn-sm rounded-0" onclick="openPreview()">Quick view</button>
                    </div>

                    <div class="action">
                        <button class="btn px-0 remove-item-btn">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6741 1.14844H10.058L9.77477 0.600591C9.71477 0.483466 9.62234 0.384943 9.50788 0.316106C9.39343 0.247269 9.26148 0.210849 9.1269 0.210943H5.68259C5.54831 0.210441 5.41659 0.246725 5.30254 0.315639C5.18849 0.384553 5.09671 0.483308 5.03772 0.600591L4.75446 1.14844H1.13839C1.01052 1.14844 0.887886 1.19783 0.797466 1.28574C0.707047 1.37364 0.65625 1.49287 0.65625 1.61719L0.65625 2.55469C0.65625 2.67901 0.707047 2.79824 0.797466 2.88615C0.887886 2.97406 1.01052 3.02344 1.13839 3.02344H13.6741C13.802 3.02344 13.9246 2.97406 14.015 2.88615C14.1055 2.79824 14.1562 2.67901 14.1562 2.55469V1.61719C14.1562 1.49287 14.1055 1.37364 14.015 1.28574C13.9246 1.19783 13.802 1.14844 13.6741 1.14844V1.14844ZM2.25937 13.8926C2.28237 14.2496 2.44445 14.5847 2.71261 14.8296C2.98077 15.0745 3.33485 15.2109 3.70279 15.2109H11.1097C11.4776 15.2109 11.8317 15.0745 12.0999 14.8296C12.3681 14.5847 12.5301 14.2496 12.5531 13.8926L13.192 3.96094H1.62054L2.25937 13.8926Z" fill="#EA4B4B" />
                            </svg>
                            Remove
                        </button>
                        <button class="btn px-0 save-item-btn">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4086 1.23658C14.5738 -0.327004 11.8451 -0.0457587 10.161 1.69193L9.50137 2.37161L8.84179 1.69193C7.16101 -0.0457587 4.42892 -0.327004 2.59413 1.23658C0.49149 3.03119 0.381001 6.25212 2.26266 8.19739L8.74134 14.887C9.15986 15.3189 9.83954 15.3189 10.2581 14.887L16.7367 8.19739C18.6217 6.25212 18.5113 3.03119 16.4086 1.23658V1.23658Z" fill="#F7B710" />
                            </svg>
                            Save Item
                        </button>
                    </div>
                </div>
                <div class="item-quantity-col">
                    <div class="inner qty-ctrl">
                        <button class="btn btn-sm decreament-btn">-</button>
                        <div class="count">1</div>
                        <button class="btn btn-sm increament-btn">+</button>
                    </div>
                </div>
                <div class="item-price-col">
                    <span>₦</span>&nbsp;71,000
                </div>
                <div class="item-sub-total-col">
                    <span>₦</span>&nbsp;71,000
                </div>
            </div>

            <!-- product 2 -->
            <div class="item-row">
                <div class="item-image-col">
                    <div class="item-image-wrapper">
                        <img src="../assets/images/product-images/product-2-image.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="item-name-col">

                    <div class="py-2 item-name-wrapper">
                        <div class="item-name">Title of product</div>
                        <button class="view-item btn btn-sm rounded-0" onclick="openPreview()">Quick view</button>
                    </div>

                    <div class="action">
                        <button class="btn px-0 remove-item-btn">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6741 1.14844H10.058L9.77477 0.600591C9.71477 0.483466 9.62234 0.384943 9.50788 0.316106C9.39343 0.247269 9.26148 0.210849 9.1269 0.210943H5.68259C5.54831 0.210441 5.41659 0.246725 5.30254 0.315639C5.18849 0.384553 5.09671 0.483308 5.03772 0.600591L4.75446 1.14844H1.13839C1.01052 1.14844 0.887886 1.19783 0.797466 1.28574C0.707047 1.37364 0.65625 1.49287 0.65625 1.61719L0.65625 2.55469C0.65625 2.67901 0.707047 2.79824 0.797466 2.88615C0.887886 2.97406 1.01052 3.02344 1.13839 3.02344H13.6741C13.802 3.02344 13.9246 2.97406 14.015 2.88615C14.1055 2.79824 14.1562 2.67901 14.1562 2.55469V1.61719C14.1562 1.49287 14.1055 1.37364 14.015 1.28574C13.9246 1.19783 13.802 1.14844 13.6741 1.14844V1.14844ZM2.25937 13.8926C2.28237 14.2496 2.44445 14.5847 2.71261 14.8296C2.98077 15.0745 3.33485 15.2109 3.70279 15.2109H11.1097C11.4776 15.2109 11.8317 15.0745 12.0999 14.8296C12.3681 14.5847 12.5301 14.2496 12.5531 13.8926L13.192 3.96094H1.62054L2.25937 13.8926Z" fill="#EA4B4B" />
                            </svg>
                            Remove
                        </button>
                        <button class="btn px-0 save-item-btn">
                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4086 1.23658C14.5738 -0.327004 11.8451 -0.0457587 10.161 1.69193L9.50137 2.37161L8.84179 1.69193C7.16101 -0.0457587 4.42892 -0.327004 2.59413 1.23658C0.49149 3.03119 0.381001 6.25212 2.26266 8.19739L8.74134 14.887C9.15986 15.3189 9.83954 15.3189 10.2581 14.887L16.7367 8.19739C18.6217 6.25212 18.5113 3.03119 16.4086 1.23658V1.23658Z" fill="#F7B710" />
                            </svg>
                            Save Item
                        </button>
                    </div>
                </div>
                <div class="item-quantity-col">
                    <div class="inner qty-ctrl">
                        <button class="btn btn-sm decreament-btn">-</button>
                        <div class="count">1</div>
                        <button class="btn btn-sm increament-btn">+</button>
                    </div>
                </div>
                <div class="item-price-col">
                    <span>₦</span>&nbsp;71,000
                </div>
                <div class="item-sub-total-col">
                    <span>₦</span>&nbsp;71,000
                </div>
            </div>


            <!-- total cost -->
            <div id="total-cost">
                <div class="inner my-4">
                    CART TOTAL: <span>₦&nbsp;71,000</span></div>
            </div>
            <!-- prdoceed link -->
            <div class="proceed-to-checkout-link-wrapper">
                <a href="./checkout.php" class="btn btn-white my-4 rounded-0">PROCEED TO CHECKOUT</a>
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



<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>