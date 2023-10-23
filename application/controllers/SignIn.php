<?php
class SignIn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('includes-main/header');
        $this->load->view('signIn');
        $this->load->view('includes-main/footer');
    }
    public function login()
    {
        $data = $this->input->post();
        $resp = $this->CM->select_data('user_account', '*', $data);
        if (count($resp) > 0) {
            $this->session->set_userdata('usersession', $resp[0]);
            echo json_encode(array('status' => 'true', 'message' => 'success'));
        } else {
            echo json_encode(array('status' => 'false', 'message' => 'username and password not match'));
        }
    }
    public function signup()
    {
        if ($this->input->method() == 'post') {
            $data = $this->input->post();

            // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
            $existing_user = $this->CM->select_data('user_account', '*', array('email' => $data['email']));
            if (count($existing_user) > 0) {
                echo json_encode(array('status' => 'false', 'message' => 'Tài khoản email đã được đăng ký'));
            } else {
                // Lưu thông tin người dùng vào cơ sở dữ liệu
                $inserted = $this->CM->insert_data('user_account', $data);

                if ($inserted) {
                    echo json_encode(array('status' => 'true', 'message' => 'Registration successful'));
                } else {
                    echo json_encode(array('status' => 'false', 'message' => 'Registration failed'));
                }
            }
        } else {
            // Load trang đăng ký (form đăng ký)
            $this->load->view('includes-main/header');
            $this->load->view('signup'); // Tạo một view mới cho trang đăng ký
            $this->load->view('includes-main/footer');
        }
    }
    public function logout()
    {
        unset($_SESSION['usersession']); // Xóa phiên của người dùng
        redirect(base_url('home')); // Chuyển hướng người dùng đến trang chủ sau khi đăng xuất
    }
}
