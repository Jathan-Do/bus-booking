<?php
class Admin extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
        if (!$this->session->userdata('adminsession')) {
            redirect(base_url('adminlogin'));
            return false;
        }
    }
    public function index()
    {
        $this->load->view('admin/includes/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/includes/footer');
    }
    public function locations($type = '')
    {
        if ($this->input->method() == 'post') {
            if ($type == 'insert') {
                $resp = $this->CM->insert_data("bms_location", $this->input->post());
                if ($resp) {
                    echo json_encode(array("status" => 'true', "message" => "Success !", "reload" => base_url("admin/locations")));
                } else {
                    echo json_encode(array("status" => 'false', "message" => "Please Try Again !"));
                }
            }
        } else {
            $this->load->view('admin/includes/header');
            $this->load->view('admin/locations');
            $this->load->view('admin/includes/footer');
        }
    }
}
