<main class="py-5" style="width: 500px; margin:auto;">
    <div class="container">
        <div class="card text-blue-main rounded-3 bg-yellow-main">
            <div class="card-body ">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5>Thông tin hành khách</h5>
                    <i class="fa-solid fa-circle-info" style="color: #076b7d;"></i>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <p>Họ và tên</p>
                    <p>
                        <?php
                        $latestBooking = end($bookings); // Lấy lần đặt gần nhất
                        if ($latestBooking !== false) {
                            echo $latestBooking['name'];
                        }
                        ?>
                    </p>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <p>Số điện thoại</p>
                    <p>
                        <?php
                        $latestBooking = end($bookings); // Lấy lần đặt gần nhất
                        if ($latestBooking !== false) {
                            echo $latestBooking['mobile'];
                        }
                        ?>
                    </p>
                </div>
                <hr class="my-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5>Thông tin chuyến đi</h5>
                    <i class="fa-solid fa-circle-info" style="color: #076b7d;"></i>
                </div>
                <div class=" d-flex justify-content-between align-items-center mb-1">
                    <p class="pe-5">Tuyến xe</p>
                    <p class="ps-5 ms-5">
                        <?php
                        foreach ($schedules as $schedule) {
                            foreach ($locations as $location) {
                                if ($location['id'] == $schedule['start']) {
                                    echo $location['name'];
                                }
                            }
                        } ?>
                        <span class="ms-2">=></span>
                    </p>
                    <p><?php
                        foreach ($schedules as $schedule) {
                            foreach ($locations as $location) {
                                if ($location['id'] == $schedule['end']) {
                                    echo $location['name'];
                                }
                            }
                        } ?></p>
                </div>

                <div class=" d-flex justify-content-between align-items-center mb-1">
                    <p>Thời gian đặt</p>
                    <p>
                        <?php
                        $latestBooking = end($bookings); // Lấy lần đặt gần nhất
                        if ($latestBooking !== false) {
                            echo $latestBooking['created_at'];
                        }
                        ?>
                    </p>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p>Số lượng ghế</p>
                    <p>
                        <?php
                        $latestBooking = end($bookings); // Lấy lần đặt gần nhất
                        if ($latestBooking !== false) {
                            echo $latestBooking['numberofmember'];
                        }
                        ?>
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p>Ngày khởi hành</p>
                    <p>
                        <?php
                        foreach ($schedules as $schedule) {
                            echo $schedule['date'];
                            break;
                        }
                        ?>
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p>Mã số xe</p>
                    <p>
                        <?php
                        $latestBooking = end($schedules); // Lấy lần đặt gần nhất
                        if ($latestBooking !== false) {
                            echo $latestBooking['bus_number'];
                        }
                        ?>
                    </p>
                </div>
                <hr class="my-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5>Chi tiết giá</h5>
                    <i class="fa-solid fa-circle-info" style="color: #076b7d;"></i>
                </div>

                <div class="d-flex justify-content-between mb-1">
                    <p>Giá vé</p>
                    <p>
                        <?php
                        foreach ($schedules as $schedule) {
                            foreach ($bookings as $booking) {
                                $latestBooking = end($bookings);
                                $totalPrice = $schedule['amount'] * (float)($latestBooking['numberofmember']);
                                echo $totalPrice . "đ";
                                break;
                            }
                        }
                        ?></p>
                </div>

                <div class="d-flex justify-content-between mb-1">
                    <p>Phí thanh toán</p>
                    <p>0đ</p>
                </div>
                <hr class="my-4">
                <div class="d-flex justify-content-between mb-3">
                    <p>Tổng tiền</p>
                    <span>
                        <?php
                        foreach ($schedules as $schedule) {
                            foreach ($bookings as $booking) {
                                $latestBooking = end($bookings);
                                $totalPrice = $schedule['amount'] * (float)($latestBooking['numberofmember']);
                                echo $totalPrice . "đ";
                                break;
                            }
                        }
                        ?>
                    </span>
                </div>
                <div class="w-100">
                    <a href="<?php echo base_url("bookTicket/successMessage") ?>" role="button" class="w-100 btn text-white btn-blue btn-block btn-lg">
                        <p>Xác nhận</p>
                    </a>
                </div>

            </div>
        </div>

    </div>
</main>