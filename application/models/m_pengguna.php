<?php
class M_Pengguna extends CI_Model
{
    public function getTable($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function getData($table, $where, $limit = NULL)
    {
        return $this->db->get_where($table, $where, $limit);
    }

    public function countRows($table)
    {
        return $this->db->get($table)->num_rows();
    }

    public function Create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getArray($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function getResult($table, $username, $id_pengguna)
    {
        $this->db->select('*');
        $this->db->where('nama_pengguna', $username);
        $this->db->where('id_pengguna', $id_pengguna);
        $result = $this->db->get($table);
        return $result->result();
    }

    public function getId($table, $username)
    {
        $this->db->select('id_pengguna');
        $this->db->where('nama', $username);
        $result = $this->db->get($table);
        return $result->result();
    }

    //function untuk hapus data
    // public function deleteData($table, $where)
    // {
    //     $this->db->delete($table, $where);
    // }
}
