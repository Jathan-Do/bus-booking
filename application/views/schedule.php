<main class="padding-divide">
    <div class="container px-5">
        <form action="<?php echo base_url("schedule") ?>" method="get" class="row g-3 needs-validation pb-5">
            <div class="form-group">
                <label class="form-label fw-semibold">Nhập điểm đi</label>
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
            <div class="form-group">
                <label class="form-label fw-semibold">Nhập điểm đến</label>
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
            <div class="row my-2 ps-2 pt-2">
                <div class="col-12 form-group">
                    <button class="btn btn-warning d-block fw-semibold w-100 w-lg-auto" type="submit">Tra cứu</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="card-body">
            <table class="table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tuyến xe</th>
                        <th>Giá vé</th>
                        <th>Ngày khởi hành</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($schedules) > 0) {
                        foreach ($schedules as $key => $schedule) {
                    ?>

                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php
                                    foreach ($locations as $location) {
                                        if ($location['id'] == $schedule['start']) {
                                            echo $location['name'] . '=>';
                                        }
                                    }
                                    foreach ($locations as $location) {
                                        if ($location['id'] == $schedule['end']) {
                                            echo $location['name'];
                                        }
                                    }
                                    ?>
                                </td>
                                <!-- <td>
                                    <?php ?>
                                </td> -->
                                <td><?php echo $schedule['amount'] ?></td>
                                <td><?php echo date("M-d, Y", strtotime($schedule['date'])) ?></td>
                                <td>
                                    <?php
                                    if (isset($_SESSION['usersession'])) {
                                        $user = $_SESSION['usersession'];
                                    ?>
                                        <a class="btn btn-warning btn-sm text-decoration-none " href="<?php echo base_url("bookTicket/booking/" . $schedule['id']) ?>">Đặt vé ngay</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a class="btn btn-warning btn-sm text-decoration-none" onclick="showAlert();" href="#">Đặt vé ngay</a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>
                        <div class="cart-body text-center fs-3 fw-semibold mb-4">
                            <img src="<?php echo base_url('/assets/images/empty_list.svg') ?>" width="300" height="120">
                            <p class="text-orange-main">
                                Không có kết quả nào được tìm thấy
                            </p>
                        </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="<?php echo base_url('assets/frontend/js/bookTicket.js') ?>"></script>