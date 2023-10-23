<?php
class Contact extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('includes-main/header');
        $this->load->view('contact');
        $this->load->view('includes-main/footer');
    }
}
