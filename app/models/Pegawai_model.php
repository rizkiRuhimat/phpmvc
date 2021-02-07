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

    public function tambahPegawai($data)
    {
        $query  =   "INSERT INTO pegawai VALUES ('',:nama,:nip,:telp,:email,:divisi,:kota,:provinsi)";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('email', $data['mail']);
        $this->db->bind('divisi', $data['divisi']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('provinsi', $data['provinsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}