<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['halaman'] = 'Dashboard';
        $this->load->model('M_Sispak');
        $data['gejala'] = $this->M_Sispak->getNumRowsGejala();
        $data['jenis_diabetes'] = $this->M_Sispak->getNumRowsJenis();
        $data['basis_pengetahuan'] = $this->M_Sispak->getNumRowsPengetahuan();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }
}
