<?php
class InfoAccount extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('includes-main/header');
        $this->load->view('infoAccount');
        $this->load->view('includes-main/footer');
    }
}
