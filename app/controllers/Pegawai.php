<?php

class Pegawai extends Controller
{

    public function index()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Daftar Pegawai';

        // mengambil data dari model Pegawai_model.php di folder models
        $data['pegawai'] = $this->model('Pegawai_model')->getPegawai();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('pegawai/index', $data);
        $this->view('templates/footer');

        // var_dump($data['pegawai']);
        // die;
    }

    public function detail($id)
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Detail Pegawai';

        // mengambil data dari model Pegawai_model.php di folder models
        $data['pegawai'] = $this->model('Pegawai_model')->getDetail($id);

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('pegawai/detail', $data);
        $this->view('templates/footer');

        // var_dump($data['pegawai']);
        // die;
    }
}