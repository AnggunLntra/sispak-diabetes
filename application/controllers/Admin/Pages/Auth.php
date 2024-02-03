<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->load->model('Auth_Model');
        $this->load->library('form_validation');

        $rules = $this->Auth_Model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            return $this->load->view('login_form');
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->Auth_Model->login($username, $password)) {
            redirect('admin/pages/dashboard');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
        }

        $this->load->view('login');
    }

    public function logout()
    {
        $this->load->model('Auth_Model');
        $this->Auth_Model->logout();
        redirect(site_url());
    }
}
