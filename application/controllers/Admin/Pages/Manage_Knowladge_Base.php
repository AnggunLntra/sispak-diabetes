<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Knowladge_Base extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Sispak');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $config['base_url'] = site_url('Admin/Pages/Manage_Knowladge_Base/index');
        $config['total_rows'] = $this->M_Sispak->countRows('basis_pengetahuan_sistem');
        $config['per_page'] = 5;

        $config['uri_segment'] = 5;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class = "pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div">';
        $config['num_tag_open'] = '<li class = "page-item"><span class = "page-link">';
        $config['num_tagl_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class = "page-item active"><span class = "page-link">';
        $config['cur_tagl_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class = "page-item"><span class = "page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo</span></span></li>';
        $config['prev_tag_open'] = '<li class = "page-item"><span class = "page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class = "page-item"><span class = "page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class = "page-item"><span class = "page-link">';
        $config['last_tagl_close'] = '</span></li>';

        $data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $data['basis_pengetahuan_sistem'] = $this->M_Sispak->getTable('basis_pengetahuan_sistem', $config['per_page'], $data['page']);

        $this->pagination->initialize($config);
        $data['halaman'] = 'Data Basis Pengetahuan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base()
    {
        $data['halaman'] = 'Tambah Basis Pengetahuan';
        $data['jenis_diabetes'] = $this->M_Sispak->getTable('jenis_diabetes', '', '');
        $data['gejala'] = $this->M_Sispak->getTable('gejala', '', '');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Knowladge_Base();
        } else {
            $id_pengetahuan          = $this->input->post('id_pengetahuan');
            $jenis_dm                = $this->input->post('jenis_dm');
            $gejala                  = $this->input->post('gejala');
            // $nilai_keanggotaan       = $this->input->post('nilai_keanggotaan');
            // $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_pengetahuan'        => $id_pengetahuan,
                'jenis_dm'              => $jenis_dm,
                'gejala'                => $gejala,
                // 'nilai_keanggotaan'     => $nilai_keanggotaan,
                // 'solusi'             => $solusi,
            );

            $this->M_Sispak->Create($data, 'basis_pengetahuan_sistem');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Update_Knowladge_Base($id)
    {
        $where = array('id_pengetahuan' => $id);
        $data['halaman'] = 'Ubah Basis Pengetahuan';
        $data['basis_pengetahuan_sistem'] = $this->M_Sispak->getData('basis_pengetahuan_sistem', $where)->result();
        $data['jenis_diabetes'] = $this->M_Sispak->getTable('jenis_diabetes', '', '');
        $data['gejala'] = $this->M_Sispak->getTable('gejala', '', '');
        $this->load->view('admin/templates/header', $data);
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
            $jenis_dm                = $this->input->post('jenis_dm');
            $gejala                  = $this->input->post('gejala');
            // $nilai_keanggotaan       = $this->input->post('nilai_keanggotaan');
            // $solusi                  = $this->input->post('solusi');

            $data = array(
                'id_pengetahuan'     => $id_pengetahuan,
                'jenis_dm'           => $jenis_dm,
                'gejala'             => $gejala,
                // 'nilai_keanggotaan'  > $nilai_keanggotaan,
                // 'solusi'             => $solusi,
            );

            $where = array(
                'id_pengetahuan' => $id
            );

            $this->M_Sispak->Update('basis_pengetahuan_sistem', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Delete_Knowladge_Base($id)
    {
        $where = array('id_pengetahuan' => $id);

        $this->M_Sispak->Delete('basis_pengetahuan_sistem', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Knowladge_Base');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pengetahuan', 'ID Pengetahuan', 'required');
        $this->form_validation->set_rules('jenis_dm', 'Jenis Diabetes Melitus', 'required');
        $this->form_validation->set_rules('gejala', 'Gejala Diabetes Melitus', 'required');
        // $this->form_validation->set_rules('nilai_keanggotaan', 'Nilai Fuzzy', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        // $this->form_validation->set_rules('solusi', 'solusi', 'required');
    }
}
