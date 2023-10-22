<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css') ?>">
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
                        <a class="nav-link text-light" href="/contact.html">TRA CỨU VÉ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/contact.html">HÓA ĐƠN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('contact') ?>">LIÊN HỆ</a>
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
            <div class="row g-2">
                <div class="col-xl-7">
                    <p class="text-orange-main fw-semibold fs-1 mb-3 border-bottom border-orange border-2 pl-3">Thông tin khách hàng</p>
                    <form action="<?php echo base_url('bookTicket/booking/' . $id) ?>" method="post" class=" pb-4 px-2">
                        <div class="form-group col-md-10">
                            <div class="form-outline">
                                <label for="validationCustom01" class="form-label fw-semibold">Họ và tên</label>
                                <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nhập họ và tên ..." required />
                            </div>
                        </div>

                        <div class="form-group col-md-10">
                            <div class="form-outline">
                                <label for="validationCustom03" class="form-label fw-semibold">Số điện thoại</label>
                                <input type="text" name="mobile" class="form-control" id="validationCustom03" placeholder="09xx..." required />
                            </div>
                        </div>
                        <div class="form-group col-md-10">
                            <div class="form-outline">
                                <label for="validationCustom05" class="form-label fw-semibold">Số lượng vé</label>
                                <input type="text" name="numberofmember" class="form-control" id="validationCustom05" placeholder="Nhập số lượng vé" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                                <label class="form-check-label" for="invalidCheck">
                                    Chấp nhận điều khoản đặt vé & chính sách bảo mật thông tin của FUTABuslines</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <button class="btn btn-warning d-block fw-semibold w-100 w-lg-auto mt-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 px-3">
                    <p class="text-orange-main fw-semibold fs-1 mb-3 border-bottom border-orange border-2 text-center">Điều khoản & Lưu ý</p>
                    <!-- ADDRESS -->
                    <div class="my-4">
                        <p class="mt-3 fw-semibold">(*) Quý khách vui lòng có mặt tại bến xuất phát của xe trước ít nhất 30 phút giờ xe khởi hành, mang theo thông báo đã thanh toán vé thành công có chứa mã vé được gửi từ hệ thống FUTA BUS LINE. Vui lòng liên hệ Trung tâm tổng đài <span class="text-orange-main">1900 6067</span> để được hỗ trợ. </br>

                            </br> (*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên hệ Tổng đài trung chuyển <span class="text-orange-main">1900 6918</span> trước khi đặt vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung chuyển không thể tới được.</p>
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