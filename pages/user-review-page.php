<?php
include '../components/header.php'
?>

<div id="user-review-page">
    <div class="bg-white d-flex">
        <div class="container auto-wrapper">
            <div class="review-form-wrapper">
                <div class="header py-2 text-center">
                    <div class="brandlogo-wrapper">
                        <img src="../assets/images/navbrand-logo-min.png" alt="" class="img-fluid">
                    </div>
                </div>
                <aside>Help us improve more by giving your feedback</aside>
                <div class="item-preview px-3">
                    <div class="inner">
                        <div class="img-wrapper">
                            <img src="../assets/images/product-images/product-2-image.png" alt="" class="img-fluid">
                        </div>
                        <div class="body bold-600">
                            <div>
                                <div class="item-name">Solar Panel 380 W Monocrystalline</div>
                                <div>Qty: 1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal-line" />

                <form class="p-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="6"></textarea>
                    </div>

                    <div class="form-group form_grp">
                        <label for="rating" class="my-0" style="display: block">Rate</label>
                        <!-- star rating -->
                        <span class="star-rating">
                            <i class="far fa-star text-warning review_star"></i>
                            <i class="far fa-star text-warning review_star"></i>
                            <i class="far fa-star text-warning review_star"></i>
                            <i class="far fa-star text-warning review_star"></i>
                            <i class="far fa-star text-warning review_star"></i>
                        </span>
                        <!-- star rating hidden input field-->
                        <input type="text" id="rating_value" style="visibility: hidden" required>
                    </div>
                    <button type="submit" class="btn btn-block btn-white rounded-0 bold-600">SUBMIT</button>
                </form>
            </div>


            <div id="success-message-wrapper">
                <p>THANK YOU FOR YOUR FEEDBACK</p>
            </div>
        </div>


    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>