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