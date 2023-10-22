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
                        <a class="nav-link text-light" href="#">ĐẶT VÉ</a>
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

    <!-- BOOKING FORM -->
    <div id="text-form" class="pl-5 pr-5">
        <div class="form-container padding-divide pr-4">
            <form action="<?php echo base_url("bookTicket") ?>" method="get">
                <div class="inner-container">
                    <div class="row pl-5 inner-container-sub main-border">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="fw-semibold">Điểm đi</label>
                                <select name="start" class="form-control" required>
                                    <option value="">Chọn điểm đi</option>
                                    <?php
                                    foreach ($locations as $location) {
                                    ?>
                                        <option value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="fw-semibold">Điểm đến</label>
                                <select name="end" class="form-control" required>
                                    <option value="">Chọn điểm đến</option>
                                    <?php
                                    foreach ($locations as $location) {
                                    ?>
                                        <option value="<?php echo $location['id'] ?>"><?php echo $location['name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="fw-semibold">Ngày đi</label>
                                <input name="date" type="Date" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group col-sm-2 pt-4 mt-2">
                            <button type="submit" class="btn btn-warning">Tìm chuyến xe</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="card-body">
                <?php
                if (count($schedules) > 0) {
                    foreach ($schedules as $schedule) {
                ?>
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Mã số xe</th>
                                    <th>Ngày khởi hành</th>
                                    <th>Điểm xuất phát</th>
                                    <th>Điểm kết thúc</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><?php echo $schedule['bus_number'] ?></td>
                                    <td><?php echo $schedule['date'] ?></td>
                                    <td><?php
                                        foreach ($locations as $location) {
                                            if ($location['id'] == $schedule['start']) {
                                                echo $location['name'];
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?php
                                        foreach ($locations as $location) {
                                            if ($location['id'] == $schedule['end']) {
                                                echo $location['name'];
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $schedule['amount'] ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm text-decoration-none " href="<?php echo base_url("bookTicket/booking/" . $schedule['id']) ?>">Đặt vé ngay</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    <?php
                    }
                } else {
                    ?>
                    <div class="cart-body text-orange-main text-center fs-3 fw-semibold">
                        <img src="<?php echo base_url('/assets/images/empty_list.svg') ?>" width="300" height="120">
                        <p>
                            Không có kết quả được tìm thấy
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

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