<?php

class Book_model extends  CI_Model
{


	public function insert($data)
	{
		$this->db->insert('books', $data);
	}

	public function show()
	{
		$alldata = $this->db->get('books');
		return $alldata->result();
	}
	public function get_author_by_id()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('author', 'author.author_id = books.author_id');
		$this->db->get();
	}
}
