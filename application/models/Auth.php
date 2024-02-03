<?php

class Auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function login_user($username, $password)
    {
        $query = $this->db->get_where('admin', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('nama', $data_user->nama);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function login_admin($username, $password)
    {
        $query  = $this->db->get_where('admin', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('nama', $data->nama);
            $this->session->set_userdata('is_login', TRUE);
            return TRUE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('Admin/Pages/Login');
        }
    }
}
