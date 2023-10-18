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
                    echo json_encode(array("status" => 'true', "message" => "Data Successfully Inserted !", "reload" => base_url("admin/locations")));
                } else {
                    echo json_encode(array("status" => 'false', "message" => "Please Try Again !"));
                }
            }
        } else {
            $this->db->order_by("id", "desc");
            $data['locations'] = $this->CM->select_data("bms_location", "*");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/locations', $data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function delete_location($id)
    {
        $this->CM->delete_data("bms_location", array("id" => $id));
        redirect(base_url("admin/locations"));
    }
    public function update_location($id)
    {
        if ($this->input->method() == 'post') {
            $this->CM->update_data("bms_location", $_POST, array("id" => $id));
            echo json_encode(array("status" => "true", "message" => "Data Successfully Updated !", "reload" => base_url("admin/locations")));
        } else {
            $data['location'] = $this->CM->select_data("bms_location", "*", array("id" => $id))[0];
            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_location', $data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function location_status($id)
    {
        $this->CM->update_data("bms_location", $_POST, array("id" => $id));
        echo json_encode(array("status" => true, "message" => "Success"));
    }
}
