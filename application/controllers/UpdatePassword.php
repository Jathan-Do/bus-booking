<?php
class UpdatePassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('usersession')) {
            redirect(base_url('home')); // Nếu chưa đăng nhập, chuyển hướng đến trang chủ
        }
    }
    public function index()
    {
        $this->load->view('includes-main/header');
        $this->load->view('updatePassword');
        $this->load->view('includes-main/footer');
    }
    public function update_password()
    {
        // Validation passed, cập nhật mật khẩu
        $passwordOld = $this->input->post('passwordOld');
        $passwordNew = $this->input->post('passwordNew');
        $passwordReNew = $this->input->post('passwordReNew');

        // Kiểm tra mật khẩu cũ trước khi cập nhật
        $user_id = $this->session->userdata('usersession')['id'];
        $old_password_correct = $this->verify_old_password($user_id, $passwordOld);

        if ($old_password_correct) {
            if ($passwordNew === $passwordReNew) {
                // Cập nhật mật khẩu vào cơ sở dữ liệu
                $data = array('password' => $passwordNew);
                $where = array('id' => $user_id);

                $update_result = $this->CM->update_data('user_account', $data, $where);

                if ($update_result) {
                    // Cập nhật mật khẩu thành công, hiển thị thông báo bằng JavaScript
                    echo '<script>alert("Cập nhật mật khẩu thành công."); window.location.href="' . base_url('home') . '";</script>';
                } else {
                    // Lỗi cập nhật mật khẩu, hiển thị thông báo bằng JavaScript
                    echo '<script>alert("Có lỗi xảy ra. Vui lòng thử lại."); window.location.href="' . base_url('updatePassword') . '";</script>';
                }
            } else {
                echo '<script>alert("Mật khẩu xác nhận không trùng khớp."); window.location.href="' . base_url('updatePassword') . '";</script>';
            }
        } else {
            // Mật khẩu cũ không đúng, hiển thị thông báo bằng JavaScript
            echo '<script>alert("Mật khẩu cũ không đúng."); window.location.href="' . base_url('updatePassword') . '";</script>';
        }
    }

    private function verify_old_password($user_id, $passwordOld)
    {
        // Hàm kiểm tra mật khẩu cũ với mật khẩu lưu trong cơ sở dữ liệu
        $user_data = $this->CM->select_data('user_account', 'password', array('id' => $user_id));

        if (!empty($user_data) && $passwordOld === $user_data[0]['password']) {
            return true;
        } else {
            return false;
        }
    }
}
