<?php
include '../components/header.php'
?>

<div id="resources-page">
    <div class="bg-white py-5">

        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li>Resources</li>
            </ul>
            <div id="user-resources-content">
                <div class="inner">
                    <div id="content-wrapper">
                        <ul class="px-0 list-style-none">
                            <li>
                                <div class="card border-0 blog-post">
                                    <img src="../assets/images/blog-post-featured-image-sample-min.png" class="card-img-top rounded-0" alt="...">
                                    <div class="card-body px-0">
                                        <h5 class="card-title">
                                            <a href="#" class="dark-link">IMPORTANCE OF SOLAR ENERGY</a>
                                        </h5>
                                        <div class="date mb-2">Apr 27, 2021</div>
                                        <p class="card-text">Solar energy is the cheapest source of energy. Not only is it cheap and easily accessible, but it is also long-lasting.
                                            The source of this inexhaustible and environmentally friendly energy is the sun. The first solar panel cell was created by
                                            Russel Ohl in 1941 while the first commercial panel was brought forward by Bell</p>
                                        <hr />
                                        <div class="category">Category: <span>Energy</span></div>
                                    </div>
                                </div>
                            </li>
                            <!--  -->
                            <li>
                                <div class="card border-0 blog-post">
                                    <img src="../assets/images/blog-post-featured-image-sample-min.png" class="card-img-top rounded-0" alt="...">
                                    <div class="card-body px-0">
                                        <h5 class="card-title">
                                            <a href="#" class="dark-link">IMPORTANCE OF SOLAR ENERGY</a>
                                        </h5>
                                        <div class="date mb-2">Apr 27, 2021</div>
                                        <p class="card-text">Solar energy is the cheapest source of energy. Not only is it cheap and easily accessible, but it is also long-lasting.
                                            The source of this inexhaustible and environmentally friendly energy is the sun. The first solar panel cell was created by
                                            Russel Ohl in 1941 while the first commercial panel was brought forward by Bell</p>
                                        <hr />
                                        <div class="category">Category: <span>Energy</span></div>
                                    </div>
                                </div>
                            </li>
                        </ul>

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

                    <!-- resources-sidebar-widget -->
                    <?php
                    include '../components/resources-sidebar-widget.php'
                    ?>

                </div>
            </div>

        </div>


    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>