<?php


class Author_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_author($data)
    {
        $this->db->insert('author', $data);
    }

    // get all author from database

    public function all()
    {
        $all_author = $this->db->get('author');
        return $all_author->result();
    }
}