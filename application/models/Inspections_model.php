<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspections_model extends CI_Model
{

    public function get_user()
    {
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_v_part()
    {
        $this->db->select('*, a.id_customer AS cus1, b.id_customer AS cus2, a.id_user AS namausr1, c.id_user AS namausr2');
        $this->db->from('part A');
        $this->db->join('customer b', 'a.id_customer = b.id_customer', 'left');
        $this->db->join('user c', 'a.id_user = c.id_user', 'left');
        $query = $this->db->get();
        return $query->result();
    }
}
