<?php

class Manage_Symptoms extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session', 'form_validation', 'pagination');
        $this->load->model('m_sispak');
    }

    public function index()
    {
        $config['base_url'] = site_url('Admin/Pages/Manage_Symptoms/index');
        $config['total_rows'] = $this->m_sispak->countGejala();
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
        $data['gejala'] = $this->m_sispak->getGejala($config['per_page'], $data['page']);

        $this->pagination->initialize($config);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/manage-symptoms', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Create_Symptoms()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/create-symptom');
        $this->load->view('admin/templates/footer');
    }

    public function Create_Symptoms_Action()
    {
        $this->_rules();

        if ($this->form_validation->run() === FALSE) {
            $this->Create_Symptoms();
        } else {
            $id_gejala               = $this->input->post('id_gejala');
            $gejala                  = $this->input->post('gejala');

            $data = array(
                'id_gejala'          => $id_gejala,
                'gejala'             => $gejala,
            );

            $this->m_sispak->Create($data, 'gejala');

            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
            redirect('Admin/Pages/Manage_Symptoms');
        }
    }

    public function Update_Symptoms($id)
    {
        $where = array('id_gejala' => $id);
        $data['gejala'] = $this->m_sispak->getData('gejala', $where)->result();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pages/update-symptom', $data);
        $this->load->view('admin/templates/footer');
    }

    public function Update_Symptoms_Action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->Update_Symptoms($id);
        } else {
            $id_gejala              = $this->input->post('id_gejala');
            $gejala           = $this->input->post('gejala');

            $data = array(
                'id_gejala'                  => $id_gejala,
                'gejala'                 => $gejala,
            );

            $where = array(
                'id_gejala' => $id
            );

            $this->m_sispak->Update('gejala', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui');
            redirect('Admin/Pages/Manage_Symptoms');
        }
    }

    public function Delete_Symptoms($id)
    {
        $where = array('id_gejala' => $id);

        $this->m_sispak->Delete('gejala', $where);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('Admin/Pages/Manage_Symptoms');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_gejala', 'id_gejala', 'required');
        $this->form_validation->set_rules('gejala', 'gejala', 'required');
    }
}
