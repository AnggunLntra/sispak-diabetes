<?php
class Login_Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Sispak');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    public function index()
    {
        $data['admin'] = $this->M_Sispak->getData();
        $this->load->view('Admin/Templates/header', $data);
        $this->load->view('Admin/Pages/login', $data);
        $this->load->view('Admin/Templates/footer');
    }

    public function Login_Action()
    {
        $this->form_validation->set_rules('id_admin', 'ID Admin', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_message('required', 'Masukkan %s');

        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            redirect('Admin/Pages/Dashboard');
        }
    }
}
