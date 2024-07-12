<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspections_model extends CI_Model
{

    public function get()
    {
        $this->db->from('part');
        $query = $this->db->get();
        return $query->result();
    }
}
