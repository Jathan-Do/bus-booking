<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css') ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css') ?>"> -->
    <!-- BOOTSTRAP -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/frontend/bootstrap5/css/bootstrap.css') ?>">
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
    <!-- HEADER -->
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
                        <a class="nav-link  text-light" href="<?php echo base_url('home') ?>">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('bookTicket') ?>">ĐẶT VÉ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('searchTicket') ?>">TRA CỨU VÉ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">HÓA ĐƠN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">LIÊN HỆ</a>
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

    <main>
        <div class="container padding-divide">
            <div class="row">
                <div class="col-xl-6">
                    <p class="text-orange-main fw-bold fs-4 mb-3 border-bottom border-warning border-2">
                        <img src="<?php echo base_url('/assets/images/emailIcon.svg') ?>" alt="Logo" width="40" height="40" class="mb-1 mx-2">
                        Gửi thông tin liên hệ đến chúng tôi
                    </p>
                    <!-- CONTACT DETAIL -->
                    <form id="checkoutDetail" class="row g-3 needs-validation pb-4  px-2" novalidate>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <label for="validationCustom01" class="form-label fw-semibold">Họ và tên lót</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Nguyễn ..." required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <label for="validationCustom02" class="form-label fw-semibold">Tên</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" placeholder="An" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-outline">
                                <label for="validationCustom03" class="form-label fw-semibold">Địa chỉ</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="123 Su Van Hanh ..." required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <label for="validationCustom05" class="form-label fw-semibold">Số điện thoại</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="0113114115" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <textarea class="form-control" placeholder="Phản hồi của bạn" id="floatingTextarea2" style="height: 140px"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                                <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 ">
                                <button class="btn btn-warning  d-block fw-semibold w-100 w-lg-auto" type="submit">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 px-3">
                    <img src="<?php echo base_url('/assets/images/khuyenmai1.png') ?>" class="w-100">
                    <!-- ADDRESS -->
                    <div class="my-4">
                        <h2 class="text-orange-main fw-semibold fs-3 my-3 border-bottom border-warning border-2">Địa chỉ
                        </h2>
                        <p>CÔNG TY CỔ PHẦN XE KHÁCH PHƯƠNG TRANG - FUTA BUS LINES</p>
                        <p class="mt-3 fw-semibold">Số 01 Tô Hiến Thành, Phường 3, Thành phố Đà Lạt, Tỉnh Lâm Đồng, Việt Nam.</p>
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