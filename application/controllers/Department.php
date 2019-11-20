<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Department extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model');
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Department';
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/adddept', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);


        $this->load->view('home', $data);
    }

    public function add()
    {
        $data = array();
        $dept = $this->input->post('d_name');
        $data = array(
            'd_name' => $dept
        );
      

        $this->department_model->add_department($data);
        
        // set flash data
        $this->session->set_flashdata('msg', 'department added ');

        redirect('department');
    }


    // show all department

    public function list()
    {
        $data = array();
        $data['title'] = 'Department';
        $data['results'] = $this->department_model->deptlist();
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/deptlist', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);


        $this->load->view('home', $data);
    }
}
