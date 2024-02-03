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
        if ($this->session->userdata('status') != "login") {
            redirect('Admin/Pages/Login');
        }
    }

    public function index()
    {
        $config['base_url'] = site_url('Admin/Pages/Manage_Knowladge_Base/index');
        $config['total_rows'] = $this->M_Sispak->countRows('basis_pengetahuan');
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
        $data['pengetahuan'] = $this->M_Sispak->getTable('basis_pengetahuan', $config['per_page'], $data['page']);
        // $data['pengetahuan'] = $this->M_Sispak->getTable('basis_pengetahuan', '', '');
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $data['gejala'] = $this->M_Sispak->getTable('data_gejala', '', '');
        $data['join'] = $this->M_Sispak->getJoin();
        $this->pagination->initialize($config);
        $data['halaman'] = 'Data Basis Pengetahuan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-knowladge-base', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Knowladge_Base()
    {
        $data['halaman'] = 'Tambah Pengetahuan';
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $data['gejala'] = $this->M_Sispak->getTable('data_gejala', '', '');
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
            $kode_pengetahuan   = $this->input->post('kode_pengetahuan');
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $kode_gejala        = $this->input->post('kode_gejala');

            $data = array(
                'kode_pengetahuan'  => $kode_pengetahuan,
                'kode_penyakit'     => $kode_penyakit,
                'kode_gejala'       => $kode_gejala,
            );

            $this->M_Sispak->Create($data, 'basis_pengetahuan');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Update_Knowladge_Base($id)
    {
        $where = array('kode_pengetahuan' => $id);
        $data['halaman'] = 'Ubah Pengetahuan';
        $data['pengetahuan'] = $this->M_Sispak->getData('basis_pengetahuan', $where)->result();
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $data['gejala'] = $this->M_Sispak->getTable('data_gejala', '', '');
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
            $kode_pengetahuan   = $this->input->post('kode_pengetahuan');
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $kode_gejala        = $this->input->post('kode_gejala');

            $data = array(
                'kode_pengetahuan'  => $kode_pengetahuan,
                'kode_penyakit'     => $kode_penyakit,
                'kode_gejala'       => $kode_gejala,
            );

            $where = array(
                'kode_pengetahuan' => $id
            );

            $this->M_Sispak->Update('basis_pengetahuan', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Knowladge_Base');
        }
    }

    public function Delete_Knowladge_Base($id)
    {
        $where = array('kode_pengetahuan' => $id);

        $this->M_Sispak->Delete('basis_pengetahuan', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Knowladge_Base');
    }

    public function test_knowladge()
    {
        $data['gejala'] = $this->M_Sispak->getTable('gejala', '', '');
        $data['halaman'] = 'Data Basis Pengetahuan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/test', $data);
        $this->load->view('admin/templates/footer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_pengetahuan', 'Kode Pengetahuan', 'required');
        $this->form_validation->set_rules('kode_penyakit', 'Nama Penyakit', 'required');
        $this->form_validation->set_rules('kode_gejala', 'Gejala', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        // $this->form_validation->set_rules('solusi', 'solusi', 'required');
    }
}
