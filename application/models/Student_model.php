<?php

class Student_model extends CI_Model
{


	public function __construct()
	{
		$this->load->database();
	}


	public function add_student($data)
	{
		$this->db->insert('students', $data);
	}

	// get all student

	public function studentlist()
	{
		// get all students

		$allstudents = $this->db->get('students');
		return $allstudents->result();
	}

	public function get_single_student($id)
	{
		$result = $this->db->get('students')->where('s_id', $id);
		return $result->row();
	}


}
