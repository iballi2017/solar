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
                <div class="item-preview">
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
                    <button type="submit" class="btn btn-block btn-white rounded-0 bold-600">SUBMIT</button>
                </form>
            </div>
        </div>


    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>