<?php

class Manage_Conditions extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('M_Sispak');
    }

    public function index()
    {
        $config['base_url'] = site_url('Admin/Pages/Manage_Conditions/index');
        $config['total_rows'] = $this->M_Sispak->countRows('kondisi');
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
        $data['kondisi'] = $this->M_Sispak->getTable('kondisi', $config['per_page'], $data['page']);

        $this->pagination->initialize($config);
        $data['halaman'] = 'Data Kondisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-conditions', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Conditions()
    {
        $data['halaman'] = 'Tambah Kondisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-condition', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Conditions_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Conditions();
        } else {
            $id_kondisi               = $this->input->post('id_kondisi');
            $kondisi                  = $this->input->post('kondisi');

            $data = array(
                'id_kondisi'          => $id_kondisi,
                'kondisi'             => $kondisi,
            );

            $this->M_Sispak->Create($data, 'kondisi');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Conditions');
        }
    }

    public function Update_Conditions($id)
    {
        $where = array('id_kondisi' => $id);
        $data['halaman'] = 'Ubah Kondisi';
        $data['kondisi'] = $this->M_Sispak->getData('kondisi', $where)->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-condition', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Update_Conditions_Action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->Update_Conditions($id);
        } else {
            $id_kondisi          = $this->input->post('id_kondisi');
            $kondisi             = $this->input->post('kondisi');

            $data = array(
                'id_kondisi'     => $id_kondisi,
                'kondisi'        => $kondisi,
            );

            $where = array(
                'id_kondisi'     => $id
            );

            $this->M_Sispak->Update('kondisi', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Conditions');
        }
    }

    public function Delete_Conditions($id)
    {
        $where = array('id_kondisi' => $id);
        $this->M_Sispak->Delete('kondisi', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Conditions');
    }

    public function _rules()
    {

        $this->form_validation->set_rules(
            'id_kondisi',
            'ID Kondisi',
            'required'
        );
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong');
    }
}
