<?php
class Test_Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/test-page');
        $this->load->view('templates/footer');
    }

    public function Pratest()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/pratest-diabetes');
        $this->load->view('templates/footer');
    }

    public function Diagnosis_Page()
    {
        $this->load->model('M_Pengguna');
        $data['gejala'] = $this->M_Pengguna->getGejala();
        $this->load->view('templates/header');
        $this->load->view('pages/diagnosis-page', $data);
        $this->load->view('templates/footer');
    }
}
