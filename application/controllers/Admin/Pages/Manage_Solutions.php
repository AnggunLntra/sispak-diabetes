<?php

class Manage_Solutions extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('M_Sispak');
        if ($this->session->userdata('status') != "login") {
            redirect('Admin/Pages/Login');
        }
    }

    public function index()
    {
        $config['base_url'] = site_url('Admin/Pages/Manage_Solutions/index');
        $config['total_rows'] = $this->M_Sispak->countRows('data_solusi');
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
        $data['solusi'] = $this->M_Sispak->getTable('data_solusi', $config['per_page'], $data['page']);

        $this->pagination->initialize($config);
        $data['halaman'] = 'Data Solusi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-solution', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Solutions()
    {
        $data['halaman'] = 'Tambah Solusi';
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-solution', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Solutions_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Solutions();
        } else {
            $kode_solusi        = $this->input->post('kode_solusi');
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $tingkat_risiko     = $this->input->post('tingkat_risiko');
            $solusi             = $this->input->post('solusi');

            $data = array(
                'kode_solusi'       => $kode_solusi,
                'kode_penyakit'     => $kode_penyakit,
                'tingkat_risiko'    => $tingkat_risiko,
                'solusi'            => $solusi,
            );

            $this->M_Sispak->Create($data, 'data_solusi');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Solutions');
        }
    }

    public function Update_Solutions($id)
    {
        $where = array('kode_solusi' => $id);
        $data['halaman'] = 'Ubah Solusi';
        $data['penyakit'] = $this->M_Sispak->getTable('data_penyakit', '', '');
        $data['solusi'] = $this->M_Sispak->getData('data_solusi', $where)->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-solution', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Update_Solutions_Action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->Update_Solutions($id);
        } else {
            $kode_solusi        = $this->input->post('kode_solusi');
            $kode_penyakit      = $this->input->post('kode_penyakit');
            $solusi             = $this->input->post('solusi');
            $tingkat_risiko     = $this->input->post('tingkat_risiko');

            $data = array(
                'kode_solusi'       => $kode_solusi,
                'kode_penyakit'     => $kode_penyakit,
                'solusi'            => $solusi,
                'tingkat_risiko'    => $tingkat_risiko,
            );

            $where = array(
                'kode_solusi'     => $id
            );

            $this->M_Sispak->Update('data_solusi', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Solutions');
        }
    }

    public function Delete_Solutions($id)
    {
        $where = array('kode_solusi' => $id);
        $this->M_Sispak->Delete('data_solusi', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Solutions');
    }

    public function _rules()
    {

        $this->form_validation->set_rules(
            'kode_solusi',
            'Kode Solusi',
            'required'
        );
        $this->form_validation->set_rules('kode_penyakit', 'Nama Penyakit', 'required');
        $this->form_validation->set_rules('solusi', 'Solusi', 'required');
        $this->form_validation->set_rules('tingkat_risiko', 'Tingkat Risiko', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
