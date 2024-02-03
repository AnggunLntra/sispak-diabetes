<?php
class Diabetic_Symptoms extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Pengguna');
        $data['gejala_diabetes'] = $this->M_Pengguna->getTable('data_gejala');
        $data['jumlahGejala'] = $this->M_Sispak->getNumRows('data_gejala');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic-symptoms', $data);
        $this->load->view('templates/footer');
    }
}
