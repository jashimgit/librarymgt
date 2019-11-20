<?php

class User extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        // set validation rules

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');





        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->load->view('formsuccess');
        }
    }
}
