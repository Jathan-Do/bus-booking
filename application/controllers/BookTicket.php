<?php
class BookTicket extends CI_Controller
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
        $this->load->view('bookTicket', $data);
        $this->load->view('includes-main/footer');
    }
    public function booking($id)
    {
        if ($this->input->method() == 'post') {
            $data = $_POST;
            $data['bus'] = $id;
            $this->CM->insert_data('bus_booking', $data);
            redirect(base_url('bookTicket/success'));
        } else {
            $data['id'] = $id;
            $this->load->view('includes-main/header');
            $this->load->view('booking', $data);
            $this->load->view('includes-main/footer');
        }
    }
    public function success()
    {
        $this->load->view('includes-main/header');
        $this->load->view('success');
        $this->load->view('includes-main/footer');
    }
}
