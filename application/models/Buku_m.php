<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Buku_m extends CI_Model
{

    public function get()
    {
        return $this->db->get('data')->result();
    }

    public function row($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('data')->row();
    }
}

/* End of file Buku_m.php */
