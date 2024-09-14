<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Inspections_model', 'Customer_model']);
    }

    public function index()
    {
        // $data['row'] = $this->Inspections_model->get();
        $this->load->view('templates/homepage_header');
        $this->load->view('homepage/index');
        $this->load->view('templates/homepage_footer');
    }

    public function input_cskd()
    {
        $data['row'] = $this->Inspections_model->get();
        $this->load->view('templates/homepage_header');
        $this->load->view('homepage/input', $data);
        $this->load->view('templates/homepage_footer');
    }

    public function view_part()
    {
        $data['row'] = $this->Inspections_model->get_v_part();
        $data['row2'] = $this->Customer_model->get();
        $this->load->view('templates/homepage_header');
        $this->load->view('homepage/v_part', $data);
        $this->load->view('templates/homepage_footer');
    }

    public function view_customer()
    {
        $data['row'] = $this->Customer_model->get();
        $this->load->view('templates/homepage_header');
        $this->load->view('homepage/v_customer', $data);
        $this->load->view('templates/homepage_footer');
    }
    public function view_pic()
    {
        $data['row'] = $this->Inspections_model->get_user();
        $this->load->view('templates/homepage_header');
        $this->load->view('homepage/v_pic', $data);
        $this->load->view('templates/homepage_footer');
    }
}
