<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['halaman'] = 'Dashboard';
        $this->load->model('M_Sispak');
        $data['gejala'] = $this->M_Sispak->getNumRows('gejala');
        $data['jenis_diabetes'] = $this->M_Sispak->getNumRows('jenis_diabetes');
        $data['kondisi'] = $this->M_Sispak->getNumRows('kondisi');
        $data['basis_pengetahuan_sistem'] = $this->M_Sispak->getNumRows('basis_pengetahuan_sistem');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/dashboard', $data);
        $this->load->view('admin/templates/footer');
    }
}
