<?php include('./inclue.php/header.php') ?>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

   

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Gallery Grid</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Development</button>
                            <button data-filter=".consulting">Consulting</button>
                            <button data-filter=".finance">Finance</button>
                            <button data-filter=".branding">Branding</button>
                            <button data-filter=".capital">Capital</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-2">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/1.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/2.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/2.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/3.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/4.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/4.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/5.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/5.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/6.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/gallery/6.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Footer 
    ============================================= -->
    <?php include('./inclue.php/footer.php') ?>
