<?php
include '../components/header.php'
?>

<div id="product-details-page" class="bg-white">
    <div class="container auto-wrapper">

        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="../">Home</a></li>
            <li><a href="../">Products</a></li>
            <li>Title of product</li>
        </ul>


        <!-- product preview -->
        <section id="product-preview" class="mb-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">

                    <!-- IMAGE -->
                    <div class="" id="product-feature-images">
                        <div class="" id="img-preview-screen">
                            <!-- <img src="../assets/images/product-images/auto-amnesia-haze-feminised-gold.png" alt="" class="img-fluid"> -->
                        </div>
                        <div class="" id="controls">
                            <ul class="list-style-none px-0 h-100">
                                <li class="select-img">
                                    <!-- IMAGE 1 -->
                                    <label for="img-1"></label>
                                    <input type="radio" id="img-1" name="preview-img" class="preview-img" value="../assets/images/product-images/product-1-image.png" checked>

                                    <!-- <img src="../assets/images/product-images/auto-amnesia-haze-feminised-gold.png" alt="" class="img-fluid"> -->
                                </li>
                                <li class="select-img">
                                    <!-- IMAGE 2 -->
                                    <label for="img-2"></label>
                                    <input type="radio" id="img-2" name="preview-img" class="preview-img" value="../assets/images/product-images/product-2-image.png">
                                    <!-- <img src="../assets/images/product-images/auto-amnesia-haze-feminised-gold.png" alt="" class="img-fluid"> -->
                                </li>
                                <li class="select-img">
                                    <!-- IMAGE 3 -->
                                    <label for="img-3"></label>
                                    <input type="radio" id="img-3" name="preview-img" class="preview-img" value="../assets/images/product-images/product-1-image.png">
                                    <!-- <img src="../assets/images/product-images/auto-amnesia-haze-feminised-gold.png" alt="" class="img-fluid"> -->
                                </li>
                            </ul>
                        </div>
                        <div id="share-product" class="mb-3 mb-md-0">Share with Friends :
                            <!-- facebook link icon -->
                            <a href="#" class="dark-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12.073C24 5.40365 18.629 0 12 0C5.37097 0 0 5.40365 0 12.073C0 18.0988 4.38823 23.0935 10.125 24V15.563H7.07661V12.073H10.125V9.41306C10.125 6.38751 11.9153 4.71627 14.6574 4.71627C15.9706 4.71627 17.3439 4.95189 17.3439 4.95189V7.92146H15.8303C14.34 7.92146 13.875 8.85225 13.875 9.8069V12.073H17.2031L16.6708 15.563H13.875V24C19.6118 23.0935 24 18.0988 24 12.073Z" fill="#414143" />
                                </svg>
                            </a>
                            <!-- whatsapp link icon -->
                            <a href="#" class="dark-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.031 6.172C8.85 6.172 6.264 8.758 6.263 11.938C6.262 13.236 6.643 14.208 7.282 15.225L6.7 17.353L8.882 16.78C9.86 17.36 10.793 17.708 12.027 17.709C15.205 17.709 17.794 15.122 17.795 11.943C17.796 8.756 15.22 6.173 12.031 6.172ZM15.423 14.416C15.279 14.821 14.586 15.19 14.253 15.24C13.954 15.285 13.576 15.303 13.161 15.171C12.909 15.091 12.586 14.984 12.173 14.806C10.434 14.055 9.299 12.304 9.212 12.189C9.125 12.073 8.504 11.249 8.504 10.396C8.504 9.543 8.952 9.123 9.111 8.95C9.27 8.777 9.457 8.733 9.573 8.733L9.905 8.739C10.011 8.744 10.154 8.699 10.295 9.037C10.439 9.384 10.786 10.237 10.829 10.324C10.872 10.411 10.901 10.512 10.843 10.628C10.785 10.744 10.756 10.816 10.67 10.917L10.41 11.221C10.323 11.307 10.233 11.401 10.334 11.575C10.435 11.749 10.783 12.316 11.298 12.776C11.96 13.367 12.519 13.55 12.692 13.636C12.865 13.722 12.966 13.708 13.068 13.593C13.169 13.477 13.501 13.087 13.617 12.913C13.733 12.74 13.848 12.768 14.007 12.826C14.166 12.884 15.018 13.303 15.191 13.39C15.364 13.477 15.48 13.52 15.523 13.592C15.568 13.664 15.568 14.011 15.423 14.416ZM12 0C5.373 0 0 5.373 0 12C0 18.627 5.373 24 12 24C18.627 24 24 18.627 24 12C24 5.373 18.627 0 12 0ZM12.029 18.88C10.868 18.88 9.724 18.588 8.711 18.036L5.034 19L6.018 15.405C5.411 14.353 5.091 13.159 5.092 11.937C5.093 8.112 8.205 5 12.029 5C13.885 5.001 15.627 5.723 16.936 7.034C18.246 8.345 18.967 10.088 18.966 11.942C18.965 15.767 15.853 18.88 12.029 18.88Z" fill="#414143" />
                                </svg>
                            </a>
                            <!-- twitter link icon -->
                            <a href="#" class="dark-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 0C5.373 0 0 5.373 0 12C0 18.627 5.373 24 12 24C18.627 24 24 18.627 24 12C24 5.373 18.627 0 12 0ZM18.066 9.645C18.249 13.685 15.236 18.189 9.902 18.189C8.28 18.189 6.771 17.713 5.5 16.898C7.024 17.078 8.545 16.654 9.752 15.709C8.496 15.686 7.435 14.855 7.068 13.714C7.519 13.8 7.963 13.775 8.366 13.665C6.985 13.387 6.031 12.143 6.062 10.812C6.45 11.027 6.892 11.156 7.363 11.171C6.084 10.316 5.722 8.627 6.474 7.336C7.89 9.074 10.007 10.217 12.394 10.337C11.975 8.541 13.338 6.81 15.193 6.81C16.018 6.81 16.765 7.159 17.289 7.717C17.943 7.589 18.559 7.349 19.113 7.02C18.898 7.691 18.443 8.253 17.85 8.609C18.431 8.539 18.985 8.385 19.499 8.156C19.115 8.734 18.629 9.24 18.066 9.645Z" fill="#414143" />
                                </svg>
                            </a>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5">
                    <div class="product-info h-100">
                        <h5>Sokar panel Sokar panel Sokar panel Sokar panel </h5>
                        <div class="star-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price bold-600">
                            <span class="label">Price:</span> ₦<span class="value">71,000</span>
                        </div>
                        <hr />
                        <ul class="product-spec list-style-none px-0 my-0">
                            <li>SKU: SO442HL15ZRYMNAFAMZ</li>
                            <li>Features: Wall Mounted</li>
                            <li> Color: BLACK</li>
                            <li> Main Material: ELEMENT</li>
                            <li> Model: 2020</li>
                            <li> Product Line: Arthur</li>
                            <li> Weight (kg): 14</li>
                        </ul>
                        <hr />
                        <div class="product-qty bold-600">
                            <span class="label">Quantity:</span>
                            <div>
                                <div class="inner qty-ctrl">
                                    <button class="btn btn-sm decreament-btn">-</button>
                                    <div class="count">1</div>
                                    <button class="btn btn-sm increament-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="action user-action">
                            <div class="add-to-cart">
                                <button class="btn btn-white">ADD TO CART</button>
                            </div>
                            <div class="add-to-wishlist">
                                <button class="btn btn-white alt-warning">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <hr class="mb-0" />
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="related-products-widget h-100">
                        <div class="inner h-100">
                            <div class="widget-header">
                                <h6 class="my-0 bold">RELATED PRODUCTS</h6>
                            </div>
                            <!-- item 1 -->
                            <a href="#" class="widget-item dark-link">
                                <div class="img-wrapper">
                                    <img src="../assets/images/product-images/product-1-image.png" alt="" class="img-fluid">
                                </div>
                                <div class="item-details">
                                    <div class="product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Expedita,
                                        iure.</div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="bold-600">₦ 71,000</div>
                                </div>
                            </a>
                            <!-- item 2 -->
                            <a href="#" class="widget-item dark-link">
                                <div class="img-wrapper">
                                    <img src="../assets/images/product-images/product-2-image.png" alt="" class="img-fluid">
                                </div>
                                <div class="item-details">
                                    <div class="product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Expedita,
                                        iure.</div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="bold-600">₦ 71,000</div>
                                </div>
                            </a>
                            <!-- item 3 -->
                            <a href="#" class="widget-item dark-link">
                                <div class="img-wrapper">
                                    <img src="../assets/images/product-images/product-1-image.png" alt="" class="img-fluid">
                                </div>
                                <div class="item-details">
                                    <div class="product-name">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Expedita,
                                        iure.</div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="bold-600">₦ 71,000</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- product details -->
        <section id="product-details">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-specification-tab" data-toggle="pill" href="#pills-specification" role="tab" aria-controls="pills-specification" aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-reviews-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                    <article>
                        <h6 class="bold-600">ABOUT THE PRODUCT</h6>
                        <p>The POLY CRYSTALLINE solar panels comes with a stamp of quality for high energy conversion rate. Made of high efficiency polycrystalline solar cells, you are assured of excellent performance even in low sunshine conditions. If you desire to acquire solar panels that will deliver high performance, you can trust that every kobo spent on IT,which will yield high dividend. These are not open market solar panels that are hardly what they are claimed to be.
                            The practically maintenance-free poly crystalline silicon solar cells panels will work diligently for long years, maintaining consistent power output. With your solar power backup system, you get to enjoy virtually free energy supply and in the cleanest form, year after year.
                            The durabilty of the poly crystalline silicon solar cells solar panels derives from the high quality components used in the manufacture. Tough scratch-resistant solar glass surface ensures consistently high power conversion ratio years into the life of the poly crystalline solar panel. The anodized aluminium alloy frame is solid casing to keep the solar cells in perfect condition for its long years of service.
                            The 150 watt poly crystalline solar panel is suitable for high capacity installation. While solar panels are not cheap to acquire, good quality panels like assure long years of service, translating to insignificant cost, over the long term.</p>


                        <tl class="key-features">
                            <dt>KEY FEATURES</dt>
                            <dd>A+ Grade, anti PID Poly Crystalline cells.</dd>
                            <dd>Maximum Power Voltage: 17-18V.</dd>
                            <dd>Use High-Efficiency Poly Crystalline Silicon Solar Cells.</dd>
                            <dd>Compliance to IEC standards.</dd>
                            <dd>Anti Reflecting Coating and Back Surface Field Structure to improve cell conversion efficiency.</dd>
                            <dd>High-Transparency low-iron tempered glass is enhanced with stiffness.</dd>
                        </tl>
                    </article>
                </div>
                <div class="tab-pane fade" id="pills-specification" role="tabpanel" aria-labelledby="pills-specification-tab">
                    <ul class="list-style-none px-0">
                        <li>
                            <span class="label">SKU: </span> SO442HL15ZRYMNAFAMZ
                        </li>
                        <li>
                            <span class="label"> Features: </span> Wall Mounted
                        </li>
                        <li>
                            <span class="label"> Color: </span> BLACK
                        </li>
                        <li>
                            <span class="label"> Main Material: </span> ELEMENT
                        </li>
                        <li>
                            <span class="label"> Model: </span> 2020
                        </li>
                        <li>
                            <span class="label">Product Line:</span>Arthur
                        </li>
                        <li>
                            <span class="label">Weight (kg):</span> 14
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                    <div class="inner">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="name-head"></th>
                                        <th class="comment-head"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="user-item">
                                        <td scope="row">
                                            <div class="inner">
                                                <div class="name-label">
                                                    A
                                                </div>
                                                <div class="customer-name-date">
                                                    <div class="name">ALEX</div>
                                                    <div class="date">October 19, 2020</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-rating">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div>I love it</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="user-item">
                                        <td scope="row">
                                            <div class="inner">
                                                <div class="name-label">
                                                    B
                                                </div>
                                                <div class="customer-name-date">
                                                    <div class="name">Baba</div>
                                                    <div class="date">December 19, 2020</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-rating">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div>I love it</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>