<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect('Admin/Pages/Login');
        }
    }

    public function index()
    {
        $data['halaman'] = 'Dashboard';
        $this->load->model('M_Sispak');
        $data['gejala'] = $this->M_Sispak->getNumRows('data_gejala');
        $data['penyakit'] = $this->M_Sispak->getNumRows('data_penyakit');
        $data['solusi'] = $this->M_Sispak->getNumRows('data_solusi');
        $data['basis_pengetahuan'] = $this->M_Sispak->getNumRows('basis_pengetahuan');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }
}
