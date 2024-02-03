<?php

class M_Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
