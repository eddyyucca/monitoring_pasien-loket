<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{

    // model langsung
    public function get()
    {

        $this->db->join('reg_periksa', 'reg_periksa.no_rkm_medis = pasien.no_rkm_medis');
        $date = date("Y-m-d");
        $this->db->where('tgl_registrasi', $date);

        $this->db->order_by('jam_reg', 'DESC');
        return $this->db->get('pasien')->result();
    }

    public function index()
    {
        $data['data'] = $this->get();
        $this->load->view('index', $data);
    }
}

/* End of file rm.php */
