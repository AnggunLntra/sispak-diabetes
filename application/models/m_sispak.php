<?php

class M_Sispak extends CI_Model
{

    public function get_gejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getGejala($limit, $start)
    {
        return $this->db->get('gejala', $limit, $start)->result_array();
    }

    public function countAllGejala()
    {
        return $this->db->get('gejala')->num_rows();
    }

    public function get_jenis()
    {
        return $this->db->get('jenis_diabetes')->result_array();
    }
}
