<?php
class Admin extends CI_Controller
{
    public function __constructor()
    {
        parent::__construct();
        if (!$this->session->userdata('adminsession')) {
            redirect(base_url('admin-login'));
            return false;
        }
    }
    public function index()
    {
        $this->load->view('admin/includes/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/includes/footer');
    }

    //INSERT FUNCTIONS
    public function locations()
    {
        if ($this->input->method() == 'post') {
            $resp = $this->CM->insert_data("bms_location", $this->input->post());
            if ($resp) {
                echo json_encode(array("status" => 'true', "message" => "Data Successfully Inserted !", "reload" => base_url("admin/locations")));
            } else {
                echo json_encode(array("status" => 'false', "message" => "Please Try Again !"));
            }
        } else {
            $this->db->order_by("id", "desc");
            $data['locations'] = $this->CM->select_data("bms_location", "*");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/locations', $data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function bus_schedule()
    {
        if ($this->input->method() == 'post') {
            $this->CM->insert_data("bus_schedule", $_POST);
            echo json_encode(array("status" => 'true', "message" => "Data Successfully Inserted !", "reload" => base_url("admin/bus_schedule")));
        } else {
            $data['locations'] = $this->CM->select_data("bms_location", "*", array("status", 1));
            $this->db->order_by("id", "desc");
            $this->db->join("bms_location", "bus_schedule.start = bms_location.id");
            $data['schedules'] = $this->CM->select_data("bus_schedule", ["bus_schedule.*", "bms_location.name as start_location"]);
            $this->load->view('admin/includes/header');
            $this->load->view('admin/bus_schedule', $data);
            $this->load->view('admin/includes/footer');
        }
        // Sau khi cập nhật thành công, lấy dữ liệu mới từ cơ sở dữ liệu
        $updatedData = $this->CM->select_data("bus_schedule", "*");
        // Đường dẫn đến file JSON
        $jsonFilePath = './assets/bus-schedule.json';
        // Gọi hàm cập nhật file JSON
        $this->updateJsonFile($updatedData, $jsonFilePath);
    }
    public function bus_booking()
    {
        if ($this->input->method() == 'post') {
            $this->CM->insert_data("bus_booking", $_POST);
            echo json_encode(array("status" => 'true', "message" => "Data Successfully Inserted !", "reload" => base_url("admin/bus_booking")));
        } else {
            $data['locations'] = $this->CM->select_data("bms_location", "*");
            $data['schedules'] = $this->CM->select_data("bus_schedule", "*");
            $this->db->join("bus_schedule", "bus_booking.bus = bus_schedule.id");
            $data['bookings'] = $this->CM->select_data("bus_booking", "bus_booking.*, bus_schedule.start, bus_schedule.end, bus_schedule.amount, bus_schedule.bus_number");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/bus_booking', $data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function user_account()
    {
        if ($this->input->method() == 'post') {
            $this->CM->insert_data("user_account", $_POST);
            echo json_encode(array("status" => 'true', "message" => "Data Successfully Inserted !", "reload" => base_url("admin/user_account")));
        } else {
            $data['users'] = $this->CM->select_data("user_account", "*");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/user_account', $data);
            $this->load->view('admin/includes/footer');
        }
    }

    //UPDATE FUNCTIONS
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
    public function bus_schedule_edit($id)
    {
        if ($this->input->method() == 'post') {
            $this->CM->update_data('bus_schedule', $_POST, array("id" => $id));
            echo json_encode(array("status" => "true", "message" => "Data Successfully Updated !", "reload" => base_url("admin/bus_schedule")));
        } else {
            $data['schedule'] = $this->CM->select_data("bus_schedule", "*", array("id" => $id))[0];
            $data['locations'] = $this->CM->select_data("bms_location", "*", array("status", 1));
            $this->load->view('admin/includes/header');
            $this->load->view('admin/bus_schedule_edit', $data);
            $this->load->view('admin/includes/footer');
        }

        // Sau khi cập nhật thành công, lấy dữ liệu mới từ cơ sở dữ liệu
        $updatedData = $this->CM->select_data("bus_schedule", "*");
        // Đường dẫn đến file JSON
        $jsonFilePath = './assets/bus-schedule.json';
        // Gọi hàm cập nhật file JSON
        $this->updateJsonFile($updatedData, $jsonFilePath);
    }
    public function edit_booking($id)
    {
        if ($this->input->method() == 'post') {
            $this->CM->update_data('bus_booking', $_POST, array("id" => $id));
            echo json_encode(array("status" => "true", "message" => "Data Successfully Updated !", "reload" => base_url("admin/bus_booking")));
        } else {
            $data['booking'] = $this->CM->select_data("bus_booking", "*", array("id" => $id))[0];
            $data['schedules'] = $this->CM->select_data("bus_schedule", "*");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_booking', $data);
            $this->load->view('admin/includes/footer');
        }
    }
    public function update_user($id)
    {
        if ($this->input->method() == 'post') {
            $this->CM->update_data("user_account", $_POST, array("id" => $id));
            echo json_encode(array("status" => "true", "message" => "Data Successfully Updated !", "reload" => base_url("admin/user_account")));
        } else {
            $data['users'] = $this->CM->select_data("user_account", "*", array("id" => $id))[0];
            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_user_account', $data);
            $this->load->view('admin/includes/footer');
        }
    }

    // DELETE FUNCTIONS
    public function delete_location($id)
    {
        $this->CM->delete_data("bms_location", array("id" => $id));
        redirect(base_url("admin/locations"));
    }
    public function bus_booking_delete($id)
    {
        $this->CM->delete_data("bus_booking", array("id" => $id));
        redirect(base_url("admin/bus_booking"));
    }
    public function bus_location_delete($id)
    {
        $this->CM->delete_data("bus_schedule", array("id" => $id));
        redirect(base_url("admin/bus_schedule"));
        // Sau khi cập nhật thành công, lấy dữ liệu mới từ cơ sở dữ liệu
        $updatedData = $this->CM->select_data("bus_schedule", "*");
        // Đường dẫn đến file JSON
        $jsonFilePath = './assets/bus-schedule.json';
        // Gọi hàm cập nhật file JSON
        $this->updateJsonFile($updatedData, $jsonFilePath);
    }
    public function delete_user($id)
    {
        $this->CM->delete_data("user_account", array("id" => $id));
        redirect(base_url("admin/user_account"));
    }

    //CHANGE STATUS LOCATION
    public function location_status($id)
    {
        $this->CM->update_data("bms_location", $_POST, array("id" => $id));
        echo json_encode(array("status" => true, "message" => "Success"));
    }
    public function user_status($id)
    {
        $this->CM->update_data("user_account", $_POST, array("id" => $id));
        echo json_encode(array("status" => true, "message" => "Success"));
    }

    //JSON 
    private function updateJsonFile($data, $jsonFilePath)
    {
        $jsonContent = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        if (file_put_contents($jsonFilePath, $jsonContent)) {
            return true;
        } else {
            return false;
        }
    }
}
