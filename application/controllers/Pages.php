<?php
class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    
    public function view($page = 'home')
    {
    	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        show_404();
    }
    $this->load->helper('url');

    $data['title'] = ucfirst($page); // Capitalize the first letter
    $data['name'] = 'skkytest';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
    }

    public function MDL_test()
    {
        if ( ! file_exists(APPPATH.'/views/pages'))
        {
        // Whoops, we don't have a page for that!
        show_404();
        }
        $this->load->helper('url');
        $this->load->library('pagination');

        $config = array();
        $config['base_url'] = base_url()."/index.php/pages/mdl_test";
        $config['total_rows'] = $this->news_model->record_count("subjects");
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //$data['subjects'] = $this->news_model->get_subjects();
        $data['subjects'] = $this->news_model->fetch($config['per_page'],$page);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = $page;

        $this->load->view('templates/header_MDL', $data);
        $this->load->view('pages/MDL', $data);
        $this->load->view('templates/footer', $data);
    }
}
