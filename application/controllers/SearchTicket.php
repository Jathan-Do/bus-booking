<?php
class SearchTicket extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['users'] = array();
        $getInfo = $this->input->get();
        if (isset($getInfo['name'])) {
            $data['users'] = $this->CM->select_data("bus_booking", "*", $getInfo);
        }
        $this->load->view('searchTicket', $data);
    }
}