<?php
class Admin extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/includes/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/includes/footer');
    }
}
