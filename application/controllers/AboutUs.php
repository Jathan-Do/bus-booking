<?php
class AboutUs extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('includes-main/header');
        $this->load->view('aboutUs');
        $this->load->view('includes-main/footer');
    }
}
