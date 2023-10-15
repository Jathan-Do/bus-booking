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
}
