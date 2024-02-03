<?php
class Diabetic_Types extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Pengguna');
        $data['penyakit']   = $this->M_Pengguna->getTable('data_penyakit');
        $data['solusi']     = $this->M_Pengguna->getTable('data_solusi');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic-types', $data);
        $this->load->view('templates/footer');
    }
}
