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
    // $data['row'] = $this->Inspections_model->get();
    $this->load->view('templates/auth_header');
    $this->load->view('auth/index');
    $this->load->view('templates/auth_footer');
  }

  public function view_part()
  {
    $data['row'] = $this->Inspections_model->get_v_part();
    $this->load->view('templates/auth_header');
    $this->load->view('auth/v_part', $data);
    $this->load->view('templates/auth_footer');
  }
}
