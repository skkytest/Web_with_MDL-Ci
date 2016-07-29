<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]',
            array(
            'required'  => 'You must provided %s.',
            'min_length[5]' => 'The user name should has at least 5 characters.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('log_in');
        }
        else
        {
            $this->load->helper('url');
            redirect('/news/index', 'refresh');
        }
    }
}
