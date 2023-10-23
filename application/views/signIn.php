<script>
    var BASE_URL = "<?php echo base_url(); ?>"
</script>
<main id="text-form" class="bg-grey">
    <div class="text-center main-heading">
        <h2>Tạo tài khoản mới</h2>
        <p class="fs-5">Đã có tài khoản ?
            <a class="text-orange-main text-decoration-none fs-5" data-bs-toggle="modal" href="#signInForm" role="button">Đăng Nhập
            </a>
            hoặc
            <a class="text-orange-main text-decoration-none fs-5" data-bs-toggle="modal" href="#signUpForm" role="button">Đăng Ký
            </a>
        </p>
    </div>

    <!-- Login form -->
    <div class="modal fade" id="signInForm" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalToggleLabel">Đăng nhập tài khoản</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="email" id="email" class="form-control" required placeholder="name@example.com">
                                <label>Địa chỉ Email</label>
                            </div>
                            <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" id="password" class="form-control" required placeholder="Password">
                            <label>Mật khẩu</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Ghi nhớ tài khoản</label>
                        </div>
                        <button id="loginbutton" class="border-0 fs-4 fw-bold text-yellow-main bg-nav-foot w-100 d-block text-center py-2 btn-product text-decoration-none">Đăng nhập</button>
                        <span>
                            <p class="my-3">
                                Chưa có tài khoản ? <a data-bs-toggle="modal" class="text-yellow-main text-decoration-none" href="#signUpForm" role="button">Đăng ký</a>
                            </p>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign up form -->
    <div class="modal fade" id="signUpForm" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Tạo tài khoản</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" id="nameUser" class="form-control" required placeholder="Họ và tên">
                                <label>Họ và tên</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" required id="emailSignup" placeholder="name@example.com">
                                <label for="floatingInput">Địa chỉ Email</label>
                            </div>
                            <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" id="passwordSignup" class="form-control" required placeholder="Password">
                            <label>Mật Khẩu</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" id="repasswordSignup" class="form-control" placeholder="Password">
                            <label>Nhập lại mật khẩu</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Ghi nhớ tài khoản</label>
                        </div>
                        <button id="signupbutton" class="border-0 fs-4 fw-bold text-yellow-main bg-nav-foot w-100 d-block text-center py-2 btn-product text-decoration-none">Tiếp tục</button>
                        <span>
                            <p class="my-3">
                                Đã có tài khoản ? <a data-bs-toggle="modal" class="text-yellow-main text-decoration-none" href="#signInForm" role="button">Đăng nhập</a>
                            </p>
                        </span>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url('assets/frontend/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/frontend/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/frontend/js/user-login.js') ?>"></script>