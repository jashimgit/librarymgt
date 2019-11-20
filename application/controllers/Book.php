<?php

defined('BASEPATH') or exit();

class Book extends  CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('book_model');
		// $this->load->library('form_validation');
	}


	public function index()
	{
		$data = array();
		$data['title'] = 'Add book';
		$data['header'] = $this->load->view('inc/header', $data, true);
		$data['sidebar'] = $this->load->view('inc/sidebar', '', true);
		$data['content'] = $this->load->view('inc/addbooks', $data, true);
		$data['footer'] = $this->load->view('inc/footer', '', true);
		// load the view 
		$this->load->view('home', $data);
	}


	public function save()
	{
        $data = array();
		$data = array(
			'b_name' => $this->input->post('b_name')
		);
		
		$this->book_model->insert($data);

		redirect(base_url('book'));
	}


/**
 * @param array 
 * @return string
*/


	public function booklist()
	{
		$data = array();
		$data['results'] = $this->book_model->show();
		$data['title'] = 'All Books';
		$data['header'] = $this->load->view('inc/header', $data, true);
		$data['sidebar'] = $this->load->view('inc/sidebar', '', true);
		$data['content'] = $this->load->view('inc/booklist', $data, true);
		$data['footer'] = $this->load->view('inc/footer', '', true);
		// load the view 
		$this->load->view('home', $data);
	}

	
} // End of Book Controller 
