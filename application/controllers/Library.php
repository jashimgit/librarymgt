<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library extends CI_Controller
{

	/**
	 *
	 */
	public function index()
    {
        $this->home();

    }


	/**
	 *
	 */
	public function home()
    {
        $data = array();
        $data['title'] = 'library management system';
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/content', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);
        
        $this->load->view('home', $data);
    }

    
  
}
