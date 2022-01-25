<!-- header -->
<?php
include '../components/header.php'
?>

<div id="products-page">
    <div class="bg-white">
        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li>Products</li>
            </ul>
            <div id="sort-options">
                <div class="inner">
                    <div id="sort-input">
                        <div class="input-group">
                            <input type="text" class="form-control border-0" id="product-search-input" placeholder="Search for product" aria-label="Search for product" aria-describedby="button-addon2">
                            <div class="item-dropdown-content">
                                <ul class="list-style-none p-3 shadow-sm">
                                    <li class="py-2 list-item">
                                        <a href="#">amu</a>
                                    </li>
                                    <li class="py-2 list-item">
                                        <a href="#">Slaadar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-group-append">
                                <button class="btn" type="button" id="button-addon2"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4479 15.4479C14.8257 16.0702 13.8124 16.0702 13.1902 15.4479L10.2568 12.5146C9.22571 13.1546 8.01682 13.5102 6.70127 13.5102C2.95016 13.5102 -0.0898438 10.4702 -0.0898438 6.70127C-0.0898438 2.93238 2.95016 -0.0898438 6.70127 -0.0898438C10.4524 -0.0898438 13.5102 2.95016 13.5102 6.70127C13.5102 7.99905 13.1368 9.20794 12.5146 10.2568L15.4479 13.1902C16.0702 13.8124 16.0702 14.8257 15.4479 15.4479ZM6.70127 1.90127C4.05238 1.90127 1.90127 4.05238 1.90127 6.70127C1.90127 9.35016 4.05238 11.5013 6.70127 11.5013C9.35016 11.5013 11.5013 9.35016 11.5013 6.70127C11.5013 4.05238 9.36793 1.90127 6.70127 1.90127Z" fill="#414143" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="sort-select-dropdown">
                        <div class="label">Sort byhh:</div>
                        <div class="sort-radios">
                            <div id="selected">Recommended</div>
                            <div class="dropdown-wrapper">
                                <ul class="dropdown list-style-none">
                                    <li>
                                        <input type="radio" name="sort" id="recommended" class="sort-radio">
                                        <label for="recommended">Recommended</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="sort" id="newArrival" class="sort-radio">
                                        <label for="newArrival">New arrival</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="sort" id="highestToLowest" class="sort-radio">
                                        <label for="highestToLowest">Highest price to lowest price</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section id="product-list">
                <div class="inner">
                    <div class="row no-gutters">
                        <!-- item 1 -->
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-card card out-of-stock">
                                <img src="../assets/images/product-images/product-1-image.png" class="card-img-top" alt="product image 1">
                                <div class="card-body">
                                    <p class="card-text mb-0">
                                        <a href="#" class="dark-link">Some quick example text to build on the card title and
                                            make...</a>
                                    </p>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p class="price"><span>₦</span>&nbsp;71,000</p>
                                    <!-- <div class="action user-action">
                                        <div class="add-to-cart">
                                            <button class="btn btn-white">ADD TO CART</button>
                                        </div>
                                        <div class="add-to-wishlist">
                                            <button class="btn btn-white">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-body action-wrapper">
                                    <div class="action user-action">
                                        <div class="add-to-cart">
                                            <button class="btn btn-white">ADD TO CART</button>
                                        </div>
                                        <div class="add-to-wishlist">
                                            <button class="btn btn-white">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-card card out-of-stock">
                                <img src="../assets/images/product-images/product-2-image.png" class="card-img-top" alt="product image 2">
                                <div class="card-body">

                                    <p class="card-text mb-0">
                                        <a href="#" class="dark-link">Some quick example text to build on the card title and
                                            make...</a>
                                    </p>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p class="price"><span>₦</span>&nbsp;71,000</p>
                                </div>
                                <div class="card-body action-wrapper">
                                    <div class="action user-action">
                                        <div class="add-to-cart">
                                            <button class="btn btn-white">ADD TO CART</button>
                                        </div>
                                        <div class="add-to-wishlist">
                                            <button class="btn btn-white">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-card card">
                                <img src="../assets/images/product-images/product-1-image.png" class="card-img-top" alt="product image 1">
                                <div class="card-body">
                                    <p class="card-text mb-0">
                                        <a href="#" class="dark-link">Some quick example text to build on the card title and
                                            make...</a>
                                    </p>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p class="price"><span>₦</span>&nbsp;71,000</p>
                                </div>
                                <div class="card-body action-wrapper">
                                    <div class="action user-action">
                                        <div class="add-to-cart">
                                            <button class="btn btn-white">ADD TO CART</button>
                                        </div>
                                        <div class="add-to-wishlist">
                                            <button class="btn btn-white">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">
                                            <i class="fas fa-arrow-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">
                                            <i class="fas fa-arrow-right"></i>
                                        </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>