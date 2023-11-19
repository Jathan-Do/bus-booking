<script>
    var BASE_URL = "<?php echo base_url(); ?>"
</script>
<main class="padding-divide">
    <div class="container px-5">
        <p class="text-orange-main text-center fw-semibold fs-2 mb-3">
            Đặt lại mật khẩu
        </p>
        <p class="text-orange-main text-center fs-4 mb-3">
            Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác
        </p>
        <form action="<?php echo base_url("updatePassword/update_password") ?>" method="post" class="row g-3 needs-validation pb-5">
            <div class="form-group">
                <label class="form-label fw-semibold">Mật khẩu cũ</label>
                <input type="password" name="passwordOld" class="form-control" placeholder="Nhập mật khẩu cũ" required />
            </div>
            <div class="form-group">
                <label class="form-label fw-semibold">Mật khẩu mới</label>
                <input type="password" id="passwordNew" name="passwordNew" class="form-control" placeholder="Nhập mật khẩu mới" required />
            </div>
            <div class="form-group">
                <label class="form-label fw-semibold">Xác nhận mật khẩu</label>
                <input type="password" id="passwordReNew" name="passwordReNew" class="form-control" placeholder="Nhập lại mật khẩu" required />
            </div>
            <div class="row my-2 ps-2 pt-2">
                <div class="col-12 form-group">
                    <button id="updatePasswordButton" class="btn btn-warning d-block fw-semibold w-100 w-lg-auto" type="submit">Xác nhận</button>
                </div>
            </div>
        </form>
        <!-- Thêm đoạn mã này để hiển thị thông báo lỗi/thành công -->
        <?php if ($this->session->flashdata('error_message')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error_message') ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success_message')) : ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success_message') ?>
            </div>
        <?php endif; ?>
    </div>
</main>
<script src="<?php echo base_url('assets/frontend/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/frontend/js/bootstrap.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/frontend/js/forgotpass.js') ?>"></script> -->