<?php
class Schedule extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['schedules'] = array();
        $data['locations'] = $this->CM->select_data("bms_location", "*");
        $getInfo = $this->input->get();
        if (isset($getInfo['start'])) {
            $data['schedules'] = $this->CM->select_data("bus_schedule", "*", $getInfo);
        }

        $this->load->view('includes-main/header');
        $this->load->view('schedule', $data);
        $this->load->view('includes-main/footer');
    }
}
