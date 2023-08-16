<?php

class M_Sispak extends CI_Model
{

    public function countGejala()
    {
        return $this->db->get('gejala')->num_rows();
    }

    public function getGejala($limit, $start)
    {
        return $this->db->get('gejala', $limit, $start)->result_array();
    }

    public function get_jenis()
    {
        return $this->db->get('jenis_diabetes')->result_array();
    }
}
