<?php


class Department_model extends CI_MOdel
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function add_department($data)
    {
        $this->db->insert('departments', $data);
    }

    public function deptlist()
    {
        $result = $this->db->get('departments')->result();
        return $result;
    }
}