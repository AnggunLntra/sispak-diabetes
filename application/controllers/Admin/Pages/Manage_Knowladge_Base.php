<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Knowladge_Base extends CI_Controller
{

    public function index()
    {
        $data['halaman'] = 'Data Basis Pengetahuan';
        $this->load->model('M_Sispak');
        $data['basis_pengetahuan'] = $this->M_Sispak->getKnowladge();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base()
    {
        $this->load->model('M_Sispak');
        $data['halaman'] = 'Tambah Basis Pengetahuan';
        $data['jenis_diabetes'] = $this->m_sispak->getJenis();
        $data['gejala'] = $this->m_sispak->getGejalaDM();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base_Action()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Knowladge_Base();
        } else {
            $id_pengetahuan          = $this->input->post('id_pengetahuan');
            $id_jenis                = $this->input->post('id_jenis');
            $id_gejala               = $this->input->post('id_gejala');
            $nilai_fuzzy             = $this->input->post('nilai_fuzzy');
            // $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_pengetahuan'     => $id_pengetahuan,
                'id_jenis'           => $id_jenis,
                'id_gejala'          => $id_gejala,
                'nilai_fuzzy'        => $nilai_fuzzy,
                // 'solusi'             => $solusi,
            );

            $this->m_sispak->Create($data, 'basis_pengetahuan');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Update_Knowladge_Base($id)
    {
        $where = array('id_pengetahuan' => $id);
        $data['halaman'] = 'Ubah Basis Pengetahuan';
        $data['basis_pengetahuan'] = $this->m_sispak->getData('basis_pengetahuan', $where)->result();
        $data['jenis_diabetes'] = $this->m_sispak->getJenis();
        $data['gejala'] = $this->m_sispak->getGejalaDM();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Update_Knowladge_Base_Action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->Update_Knowladge_Base($id);
        } else {
            $id_pengetahuan          = $this->input->post('id_pengetahuan');
            $id_jenis                = $this->input->post('id_jenis');
            $id_gejala               = $this->input->post('id_gejala');
            $nilai_fuzzy             = $this->input->post('nilai_fuzzy');
            // $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_pengetahuan'     => $id_pengetahuan,
                'id_jenis'           => $id_jenis,
                'id_gejala'          => $id_gejala,
                'nilai_fuzzy'        => $nilai_fuzzy,
                // 'solusi'             => $solusi,
            );

            $where = array(
                'id_pengetahuan' => $id
            );

            $this->m_sispak->Update('basis_pengetahuan', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Delete_Knowladge_Base($id)
    {
        $where = array('id_pengetahuan' => $id);

        $this->m_sispak->Delete('basis_pengetahuan', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Knowladge_Base');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pengetahuan', 'ID Pengetahuan', 'required');
        $this->form_validation->set_rules('id_jenis', 'ID Jenis Diabetes Melitus', 'required');
        $this->form_validation->set_rules('id_gejala', 'ID Gejala Diabetes Melitus', 'required');
        $this->form_validation->set_rules('nilai_fuzzy', 'Nilai Fuzzy', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        // $this->form_validation->set_rules('solusi', 'solusi', 'required');
    }
}
