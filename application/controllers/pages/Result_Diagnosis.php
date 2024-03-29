<?php
class Result_Diagnosis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengguna');
        $this->load->library('session');
        if ($this->session->userdata('status') != "terdaftar") {
            redirect('Pages/Test_Diagnosis');
        }
    }
    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_pengguna'] = $this->session->userdata('id_pengguna');
        $data['fuzzy'] = $this->M_Pengguna->getResult('tes_fuzzy', $data['nama'], $data['id_pengguna']);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/result-test-page', $data);
        $this->load->view('templates/footer');
    }

    public function delete_data($id_konsultasi)
    {
        // $id = array('id_konsultasi' => $id_konsultasi);
        $id = $id_konsultasi;
        $this->db->query("DELETE konsultasi, tes_fuzzy FROM konsultasi JOIN tes_fuzzy ON konsultasi.id_konsultasi = tes_fuzzy.id_pengguna WHERE konsultasi.id_konsultasi = $id");
        // $this->M_Sispak->Delete('tes_fuzzy', $id);
        $this->session->sess_destroy();
        redirect('home');
    }
}
