<?php
class Result extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengguna');
        $this->load->library('session');
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_pengguna'] = $this->session->userdata('id_pengguna');
        $data['fuzzy'] = $this->M_Pengguna->getResult('tes_fuzzy', $data['nama'], $data['id_pengguna']);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/result', $data);
        $this->load->view('templates/footer');
    }

    // public function Delete_Data($id)
    // {
    //     $where = array('id_pengguna' => $id);

    //     $this->M_Sispak->Delete('jenisDiabetes', $where);
    //     $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
    //     redirect('Admin/Pages/Manage_Types');
    // }
}
