<?php
class Diabetic_Symptoms extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Pengguna');
        $data['gejala_diabetes'] = $this->M_Pengguna->getTable('gejala_diabetes');
        $data['jumlahGejala'] = $this->M_Sispak->getNumRows('gejala_diabetes');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic-symptoms', $data);
        $this->load->view('templates/footer');
    }
}
