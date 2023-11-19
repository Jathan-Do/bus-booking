<main class="padding-divide">
    <div class="m-auto w-50 px-5 inner-container-sub main-border">
        <p class="text-orange-main text-center fw-semibold fs-2 mb-3">
            Thông tin tài khoản
        </p>
        <div class="row">
            <div class="col-lg-4 form-group">
                <div>
                    <img class="imageLoad" style="object-fit: cover; object-position: center;width: 150px; height:150px; border: 4px solid #f2726a; overflow: hidden; margin: 0 auto; border-radius: 50%; cursor: pointer">
                </div>
                <label class="form-label btn btn-warning ms-4 mt-2">
                    Chọn ảnh
                    <input type="file" class="form-control d-none" id="fileInput">
                </label>
            </div>
            <div class="col-lg-2 form-group mt-4">
                <p class="form-label fw-semibold pb-2">Họ và tên</p>
                <p class="form-label fw-semibold pb-2">Email</p>
                <p class="form-label fw-semibold">Trạng thái</p>
            </div>
            <div class="col-lg-6 form-group mt-4">
                <?php
                if (isset($_SESSION['usersession'])) {
                    $user = $_SESSION['usersession'];
                ?>
                    <p class="form-label fw-semibold pb-2">: <?php echo $user['name'] ?></p>
                    <p class="form-label fw-semibold pb-2">: <?php echo $user['email'] ?></p>
                    <p class="form-label fw-semibold">: Đang hoạt động</p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url('assets/frontend/js/imageLoad.js') ?>"></script>