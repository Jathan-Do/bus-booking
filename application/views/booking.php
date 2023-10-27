<main class="py-5">
    <div class="container">
        <div class="row g-2">
            <div class="col-xl-6">
                <p class="text-orange-main fw-semibold fs-2 mb-3 border-bottom border-orange border-2 pl-3">Thông tin khách hàng</p>

                <div class="container">
                    <!-- CHECKOUT DETAIL -->
                    <form action="<?php echo base_url('bookTicket/booking/' . $id) ?>" method="post" id="checkoutDetail" class=" pb-4 px-2">
                        <div class="form-group col-md-10 pb-2">
                            <div class="form-outline">
                                <label for="validationCustom01" class="form-label fw-semibold">Họ và tên</label>
                                <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Vui lòng nhập họ và tên" required />
                            </div>
                        </div>

                        <div class="form-group col-md-10 pb-2">
                            <div class="form-outline">
                                <label for="validationCustom03" class="form-label fw-semibold">Số điện thoại</label>
                                <input type="text" name="mobile" class="form-control" id="validationCustom03" placeholder="Vui lòng nhập số điện thoại" required />
                            </div>
                        </div>
                        <div class="form-group col-md-10 pb-2">
                            <div class="form-outline">
                                <label for="validationCustom05" class="form-label fw-semibold">Số lượng vé</label>
                                <input type="text" name="numberofmember" class="form-control" id="validationCustom05" placeholder="Vui lòng nhập số lượng vé" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                                <label class="form-check-label" for="invalidCheck">
                                    Chấp nhận điều khoản & chính sách bảo mật thông tin của FUTABuslines</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <button class=" btn btn-warning d-block fw-semibold w-100 w-lg-auto mt-2" type="submit">Tiếp tục</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-xl-6 px-3">
                <p class="text-orange-main fw-semibold fs-2 mb-3 border-bottom border-orange border-2 text-center">Điều khoản & Lưu ý</p>
                <!-- ADDRESS -->
                <div class="my-4">
                    <p class="mt-3 fw-semibold">(*) Quý khách vui lòng có mặt tại bến xuất phát của xe trước ít nhất 30 phút giờ xe khởi hành, mang theo thông báo đã thanh toán vé thành công có chứa mã vé được gửi từ hệ thống FUTA BUS LINE. Vui lòng liên hệ Trung tâm tổng đài <span class="text-orange-main">1900 6067</span> để được hỗ trợ. </br>

                        </br> (*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên hệ Tổng đài trung chuyển <span class="text-orange-main">1900 6918</span> trước khi đặt vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung chuyển không thể tới được.</p>
                </div>
            </div>
        </div>
    </div>
</main>