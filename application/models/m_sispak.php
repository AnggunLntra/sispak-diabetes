<?php

class M_Sispak extends CI_Model
{
    //function untuk menghitung baris/isi tabel
    public function countRows($table)
    {
        return $this->db->get($table)->num_rows();
    }

    //function untuk ambil data tabel
    public function getTable($table, $limit, $start)
    {
        return $this->db->get($table, $limit, $start)->result_array();
    }

    //function untuk mengitung jumlah baris
    public function getNumRows($table)
    {
        $query = $this->db->query("SELECT * FROM `$table`");
        return $query->num_rows();
    }

    //function untuk ambil data
    public function getData($table, $where, $limit = NULL)
    {
        return $this->db->get_where($table, $where, $limit);
    }

    //function untuk membuat data baru
    public function Create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    //function untuk memperbarui data
    public function Update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    //function untuk hapus data
    public function Delete($table, $where)
    {
        $this->db->delete($table, $where);
    }
}
