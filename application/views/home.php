<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css') ?>"> -->
    <!-- BOOTSTRAP -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/Home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/Products.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/CartDetail.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/collection.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/contact.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/style.css') ?>">


    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>FUTA Bus Lines</title>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg bg-nav-foot sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">
                <img src="<?php echo base_url('/assets/images/logo.png') ?>" alt="Logo" width="240" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                    <li class="nav-item ">
                        <a class="nav-link  text-light" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/collection.html">LỊCH TRÌNH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">TRA CỨU VÉ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">HÓA ĐƠN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">VỀ CHÚNG TÔI</a>
                    </li>
                </ul>

                <!-- Cart and User -->
                <div class="d-flex flex align-items-center ms-auto my-lg-0 my-3">
                    <a href="/signup.html" type="button" class="btn btn-warning ms-4 d-block">SIGN UP</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- BANNER -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('/assets/images/bannerFuta.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('/assets/images/bannerFuta2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="bg-grey">

        <div class="container">
            <div class="padding-divide pb-0">
                <h3 class="text-center fw-bold fs-2 text-blue-main mb-0 text-uppercase">FUTA BUS LINES - CHẤT LƯỢNG LÀ DANH DỰ</h3>
                <video autoplay muted loop class="radius-main my-3 w-100">
                    <source src="<?php echo base_url('/assets/images/videogioithieu.mp4') ?>">
                </video>

            </div>

        </div>

        <div class="container">
            <!-- CATEGORY COLLECTION -->
            <div class=" padding-divide">
                <h3 class="fw-bold fs-2 text-blue-main mb-3">KHUYẾN MÃI NỔI BẬT</h3>
                <div id="carouselPromotionIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPromotionIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPromotionIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselPromotionIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                    </div>
                    <div class=" carousel-inner rounded">
                        <div class="carousel-item active ">
                            <div class="row rounded">
                                <img src="<?php echo base_url('/assets/images/khuyenmai1.png') ?>" class="col-4" alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai2.png') ?>" class="col-4" alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai3.png') ?>" class="col-4 " alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row ">
                                <img src="<?php echo base_url('/assets/images/khuyenmai4.png') ?>" class=" col-4 " alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai5.png') ?>" class=" col-4" alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai6.png') ?>" class=" col-4" alt="...">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row ">
                                <img src="<?php echo base_url('/assets/images/khuyenmai4.png') ?>" class=" col-4 " alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai3.png') ?>" class=" col-4 " alt="...">
                                <img src="<?php echo base_url('/assets/images/khuyenmai2.png') ?>" class=" col-4" alt="...">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromotionIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromotionIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

        <div class="container">
            <!-- CATEGORY COLLECTION -->
            <div class=" padding-divide">
                <h3 class="fw-bold fs-2 text-blue-main mb-0">TUYẾN PHỔ BIẾN</h3>
                <p class="font-italic text-muted mb-4">Được khánh hàng tin tưởng và lựa chọn</p>
                <div class="row">
                    <!-- CATEGORY Item-->
                    <div class="col-lg-6 mb-4">
                        <div class="hover hover-1 text-white rounded"><img src="<?php echo base_url('/assets/images/TPHCM.webp') ?>" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title mb-0"> <span class="fw-bold">Tp Hồ Chí Minh</span>
                                </h3>
                                <p class="hover-1-description fw-semibold mb-0">Sài Gòn sôi động và đa dạng văn hóa.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY Item-->
                    <div class="col-lg-6 mb-4">
                        <div class="hover hover-1 text-white rounded"><img src="<?php echo base_url('/assets/images/TPDaLat.jpg') ?>" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title mb-0"> <span class="fw-bold">Đà Lạt</span>
                                </h3>
                                <p class="hover-1-description fw-semibold mb-0">Thiên đàng núi rừng và hoa đẹp quanh năm.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY Item-->
                    <div class="col-lg-6 mb-4">
                        <div class="hover hover-1 text-white rounded"><img src="<?php echo base_url('/assets/images/TPDaNang.jpg') ?>" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title mb-0"> <span class="fw-bold">Đà Nẵng</span>
                                </h3>
                                <p class="hover-1-description fw-semibold mb-0">Bãi biển và ẩm thực độc đáo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY Item-->
                    <div class="col-lg-6 mb-4">
                        <div class="hover hover-1 text-white rounded"><img src="<?php echo base_url('/assets/images/TPHue.jpg') ?>" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title mb-0"> <span class="fw-bold">Huế</span>
                                </h3>
                                <p class="hover-1-description fw-semibold mb-0"> Di sản văn hóa và lịch sử vương quốc cổ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="container-fluid bg-nav-foot py-3">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo base_url('/assets/images/logo.png') ?>" alt="Logo" class="mb-4" width="300" height="100">
            <p class="text-yellow-main fs-3">BUY SMART - LIVE SMART</p>
        </div>
    </footer>


    <!-- <script src=" <?php echo base_url('assets/frontend/js/bootstrap.js') ?>"></script> -->
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url('/assets/frontend/bootstrap5/js/bootstrap.min.js') ?>" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/103727226d.js" crossorigin="anonymous"></script>
</body>

</html>