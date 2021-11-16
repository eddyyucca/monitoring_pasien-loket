<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{

    // model langsung
    public function get()
    {

        // $this->db->select('*');
        // $this->db->from('pasien');
        // $this->db->join('reg_periksa', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis', 'LEFT');
        // $this->db->join('poliklinik', 'reg_periksa.kd_poli = poliklinik.kd_poli', 'LEFT');
        // $date = date("Y-m-d");
        // $this->db->where('tgl_registrasi', $date);
        // $this->db->order_by('jam_reg', 'DESC');
        // $query = $this->db->get();
        // return $query;
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->join('reg_periksa', 'reg_periksa.no_rkm_medis = pasien.no_rkm_medis');
        $this->db->join('poliklinik', 'poliklinik.kd_poli = reg_periksa.kd_poli');
        $date = date("Y-m-d");
        $this->db->where('tgl_registrasi', $date);
        $this->db->order_by('jam_reg', 'DESC');
        return $this->db->get()->result();
    }

    public function index()
    {
        $data['data'] = $this->get();
        $this->load->view('index', $data);
    }
}

/* End of file rm.php */
