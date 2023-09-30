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
    }

    public function index()
    {
        $data['halaman'] = 'Data Jenis Diabetes';
        $data['jenis_diabetes'] = $this->M_Sispak->getTable('jenis_diabetes', '', '');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-types', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Types()
    {
        $data['halaman'] = 'Tambah Jenis Diabetes';
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
            $id_jenis                = $this->input->post('id_jenis');
            $jenis_dm                = $this->input->post('jenis_dm');
            $deskripsi               = $this->input->post('deskripsi');
            $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_jenis'           => $id_jenis,
                'jenis_dm'           => $jenis_dm,
                'deskripsi'          => $deskripsi,
                'solusi'             => $solusi,
            );

            $this->M_Sispak->Create($data, 'jenis_diabetes');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Update_Types($id)
    {
        $where = array('id_jenis' => $id);
        $data['halaman'] = 'Ubah Jenis Diabetes';
        $data['jenis_diabetes'] = $this->M_Sispak->getData('jenis_diabetes', $where)->result();
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
            $id_jenis                = $this->input->post('id_jenis');
            $jenis_dm                = $this->input->post('jenis_dm');
            $deskripsi               = $this->input->post('deskripsi');
            $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_jenis'           => $id_jenis,
                'jenis_dm'           => $jenis_dm,
                'deskripsi'          => $deskripsi,
                'solusi'             => $solusi,
            );

            $where = array(
                'id_jenis' => $id
            );

            $this->M_Sispak->Update('jenis_diabetes', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Delete_Types($id)
    {
        $where = array('id_jenis' => $id);

        $this->M_Sispak->Delete('jenis_diabetes', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Types');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_jenis', 'ID Jenis', 'required');
        $this->form_validation->set_rules('jenis_dm', 'Jenis Diabetes Melitus', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('solusi', 'Solusi', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
