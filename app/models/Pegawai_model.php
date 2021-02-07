<?php

class Pegawai_model
{
    private $table = 'pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPegawai()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDetail($id)
    {
        $this->db->query('SELECT * FROM `' . $this->table . '` WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }
}