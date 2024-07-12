<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Inspections_model');
  }

  public function index()
  {
    $data['row'] = $this->Inspections_model->get();
    $this->load->view('templates/homepage_header');
    $this->load->view('homepage/index', $data);
    $this->load->view('templates/homepage_footer');
  }
}