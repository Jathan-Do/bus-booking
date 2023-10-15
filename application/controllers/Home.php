<?php
class Home extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('home');
    }
}
