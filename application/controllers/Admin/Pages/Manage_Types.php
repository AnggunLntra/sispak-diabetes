<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Types extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->model('M_Sispak');
        $data['jenis_diabetes'] = $this->M_Sispak->get_jenis();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-types', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Types()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-type');
        $this->load->view('admin/templates/footer');
    }

    public function Create_Types_Action()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

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

            $this->m_sispak->Create($data, 'jenis_diabetes');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Jenis Diabetes Berhasil Ditambahkan!.
            </div>');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Update_Types($id)
    {
        $where = array('id_jenis' => $id);
        $data['jenis_diabetes'] = $this->m_sispak->getData('jenis_diabetes', $where)->result();
        $this->load->view('admin/templates/header');
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

            $this->m_sispak->Update('jenis_diabetes', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Jenis Diabetes Berhasil Diupdate!.
            </div>');
            redirect('Admin/Pages/Manage_Types');
        }
    }

    public function Delete_Types($id)
    {
        $where = array('id_jenis' => $id);

        $this->m_sispak->Delete('jenis_diabetes', $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Jenis Diabetes Berhasil Dihapus!.
        </button>
        </div>');
        redirect('Admin/Pages/Manage_Types');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');
        $this->form_validation->set_rules('jenis_dm', 'jenis_dm', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('solusi', 'solusi', 'required');
    }
}
