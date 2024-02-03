<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Types extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Sispak');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect('Admin/Pages/Login');
        }
    }

    public function index()
    {
        $data['halaman'] = 'Data Penyakit';
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-types', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Types()
    {
        $data['halaman'] = 'Tambah Penyakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-type', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Types_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Types();
        } else {
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $nama_penyakit      = $this->input->post('nama_penyakit');
            $deskripsi          = $this->input->post('deskripsi');


            $data = array(
                'kode_penyakit' => $kode_penyakit,
                'nama_penyakit' => $nama_penyakit,
                'deskripsi'     => $deskripsi,
            );

            $this->M_Sispak->Create($data, 'data_penyakit');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Update_Types($id)
    {
        $where = array('kode_penyakit' => $id);
        $data['halaman'] = 'Ubah Penyakit';
        $data['penyakit'] = $this->M_Sispak->getData('data_penyakit', $where)->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-type', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Update_Types_Action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->Update_Types($id);
        } else {
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $nama_penyakit      = $this->input->post('nama_penyakit');
            $deskripsi          = $this->input->post('deskripsi');


            $data = array(
                'kode_penyakit' => $kode_penyakit,
                'nama_penyakit' => $nama_penyakit,
                'deskripsi'     => $deskripsi,
            );

            $where = array(
                'kode_penyakit' => $id
            );

            $this->M_Sispak->Update('data_penyakit', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Delete_Types($id)
    {
        $where = array('kode_penyakit' => $id);

        $this->M_Sispak->Delete('data_penyakit', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Types');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_penyakit', 'Kode Penyakit', 'required');
        $this->form_validation->set_rules('nama_penyakit', 'Nama_Penyakit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
