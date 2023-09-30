<?php
class Diabetic_Types extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_Pengguna');
        $data['jenis_diabetes'] = $this->M_Pengguna->getTable('jenis_diabetes');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/diabetic-types', $data);
        $this->load->view('templates/footer');
    }
}
