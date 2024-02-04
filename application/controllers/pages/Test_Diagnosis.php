<?php
class Test_Diagnosis extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_Pengguna');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/test-page');
        $this->load->view('templates/footer');
    }

    public function user()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $id_pengguna    = $this->input->post('id_pengguna');
            $nama           = $this->input->post('nama');
            $umur           = $this->input->post('umur');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');

            $data = array(
                'id_pengguna'   => $id_pengguna,
                'nama'          => $nama,
                'umur'          => $umur,
                'jenis_kelamin' => $jenis_kelamin,
            );

            $data_pengguna = array(
                'nama'          => $nama,
                'umur'          => $umur,
                'jenis_kelamin' => $jenis_kelamin,
                'status'        => "terdaftar",
            );

            $this->session->set_userdata($data_pengguna);
            $this->M_Pengguna->Create($data, 'pengguna');
            redirect('Pages/Diagnosis_Pages');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
