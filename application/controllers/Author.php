<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Author extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('author_model');
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Add Author';
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/addauthor', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);

        $this->load->view('home', $data);
    }

    public function add()
    {
        $data = array();
        $author_name = $this->input->post('author_name');
        $data = array(
            'author_name' => $author_name,
        );

        // add author
        $this->author_model->add_author($data);
        redirect('author');
    }

    public function list()
    {
        $data = array();
        $data['title'] = 'All Author';
        $data['results'] = $this->author_model->all();

        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/authorlist', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
    
        $this->load->view('home', $data);
    }
}
