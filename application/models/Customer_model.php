<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{

    public function get()
    {
        $this->db->from('customer');
        $query = $this->db->get();
        return $query->result();
    }
}
