<?php
class M_Pengguna extends CI_Model
{
    public function getTable($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function countRows($table)
    {
        return $this->db->get($table)->num_rows();
    }
}
