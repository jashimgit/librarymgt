<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
    // set the property 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'library management system';
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/addstudent', '', true);
        $data['footer'] = $this->load->view('inc/footer', '', true);

        $this->load->view('home', $data);
    }


    public function create()
    {
        $data = array();
        $s_name = $this->input->post('s_name');
        $s_dept = $this->input->post('s_dept');
        $s_roll = $this->input->post('s_roll');
        $s_reg = $this->input->post('s_reg');

        $data = array(
            's_name' => $s_name,
            's_dept' => $s_dept,
            's_roll' => $s_roll,
            's_reg' => $s_reg
        );

        // add student
        $this->student_model->add_student($data);
        redirect('student');
    }


    // show all students method

    public function studentlist()
    {
        $data = array();
        // get results from model 
        $data['results'] = $this->student_model->studentlist();

        $data['title'] = 'library management system';
        $data['header'] = $this->load->view('inc/header', $data, true);
        $data['sidebar'] = $this->load->view('inc/sidebar', '', true);
        $data['content'] = $this->load->view('inc/studentlist', '', true);

        $data['footer'] = $this->load->view('inc/footer', '', true);

        // load the view page 

        $this->load->view('home', $data);
    }

    // edit student method

    public function edit($id)
    {
        $data = array();

        // single  student with id
        $data['result'] = $this->student_model->get_single_student($id);

        redirect('student', $data);
    }

    public function test($id)
    {
        $data = array();
        $data['result'] = $this->student_model->get_single_student($id);
    }
}
