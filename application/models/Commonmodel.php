<?php
class Commonmodel extends CI_Model
{
    public function select_data($table, $select, $warr = '')
    {
        if ($warr != '') {
            $this->db->where($warr);
        }
        $resp = $this->db->select($select)->from($table)->get()->result_array();
        return $resp;
    }
    public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}
