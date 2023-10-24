<main>
    <div class="container py-5 px-5">
        <p class="text-orange-main text-center fw-bold fs-4 mb-3 border-bottom border-warning border-2">
            TRA CỨU THÔNG TIN ĐẶT VÉ
        </p>
        <form action="<?php echo base_url("searchTicket") ?>" method="get" class="row g-3 needs-validation pb-5">
            <div class="form-group">
                <label class="form-label fw-semibold">Họ và tên </label>
                <input type="text" name="name" class="form-control" placeholder="Nguyễn ..." required />
            </div>
            <div class="form-group">
                <label class="form-label fw-semibold">Số điện thoại</label>
                <input type="text" name="mobile" class="form-control" placeholder="0113114115" required />
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
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Mã số xe</th>
                        <th>Họ và Tên</th>
                        <th>Số điện thoại</th>
                        <th>Số vé</th>
                        <th>Thời gian đặt vé</th>
                    </tr>
                </thead>
                <?php
                if (count($users) > 0) {
                    foreach ($users as $user) {
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $user['bus'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['mobile'] ?></td>
                                <td><?php echo $user['numberofmember'] ?></td>
                                <td><?php echo $user['created_at'] ?></td>
                            </tr>
                        </tbody>
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
            </table>
        </div>
    </div>
</main>