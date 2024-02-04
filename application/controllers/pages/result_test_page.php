<?php
class Result_Test_Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengguna');
        $this->load->library('session');
        if ($this->session->userdata('status') != "terdaftar") {
            redirect('pages/test_diagnosis');
        }
    }
    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_pengguna'] = $this->session->userdata('id_pengguna');
        $data['fuzzy'] = $this->M_Pengguna->getResult('hasil_diagnosis', $data['nama'], $data['id_pengguna']);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/result-test-page', $data);
        $this->load->view('templates/footer');
    }

    public function delete_data($id_konsultasi)
    {
        // $id = array('id_konsultasi' => $id_konsultasi);
        $this->session->sess_destroy();
        $id = $id_konsultasi;
        $this->db->query("DELETE konsultasi, tes_fuzzy FROM konsultasi JOIN tes_fuzzy ON konsultasi.id_konsultasi = tes_fuzzy.id_pengguna WHERE konsultasi.id_konsultasi = $id");
        // $this->M_Sispak->Delete('tes_fuzzy', $id);
        redirect('home');
    }
}
