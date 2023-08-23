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

    public function getGejalaDM()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getjenis()
    {
        return $this->db->get('jenis_diabetes')->result_array();
    }

    public function getKnowladge()
    {
        return $this->db->get('basis_pengetahuan')->result_array();
    }

    public function getNumRowsGejala()
    {
        $query = $this->db->query('SELECT * FROM gejala');
        return $query->num_rows();
    }

    public function getNumRowsJenis()
    {
        $query = $this->db->query('SELECT * FROM jenis_diabetes');
        return $query->num_rows();
    }

    public function getNumRowsPengetahuan()
    {
        $query = $this->db->query('SELECT * FROM basis_pengetahuan');
        return $query->num_rows();
    }

    public function getData($table, $where, $limit = NULL)
    {
        return $this->db->get_where($table, $where, $limit);
    }

    public function Create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function Update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function Delete($table, $where)
    {
        $this->db->delete($table, $where);
    }
}
