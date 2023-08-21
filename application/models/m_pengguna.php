<?php
class M_Pengguna extends CI_Model
{
    public function getGejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getJenis()
    {
        return $this->db->get('jenis_diabetes')->result_array();
    }
}
