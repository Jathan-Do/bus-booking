<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css') ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css') ?>"> -->
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
    <link rel="icon" href="<?php echo base_url('/assets/images/icon.webp') ?>">
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
                        <a class="nav-link text-light" href="<?php echo base_url('#') ?>">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('contact') ?>">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('aboutUs') ?>">VỀ CHÚNG TÔI</a>
                    </li>
                </ul>

                <!-- Đăng ký/Đăng Nhập -->
                <?php
                if (isset($_SESSION['usersession'])) {
                    $user = $_SESSION['usersession'];
                ?>
                    <div>
                        <p class="fw-bold text-light btn border border-warning text-truncate position-relative" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="max-width:200px">
                            <?php echo $user['name'] ?>
                        </p>
                        <div class="collapse bg-nav-foot radius-main position-absolute mt-2" id="collapseExample" style="width:100px">
                            <a href="<?php echo base_url('signIn/logout') ?>" type="button" class="btn btn-warning d-block  ">Log Out</a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="d-flex flex align-items-center ms-auto my-lg-0 my-3">
                        <a href="<?php echo base_url('signIn') ?>" class="btn btn-warning ms-4 d-block">Đăng nhập/Đăng ký</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>