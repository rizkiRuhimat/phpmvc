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

        // mengambil data dari model Pegawai_model.php
        $data['pegawai'] = $this->model('Pegawai_model')->getDetail($id);

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('pegawai/detail', $data);
        $this->view('templates/footer');

        // print_r($data);
        // die;
    }

    public function tambah()
    {
        // var_dump($_POST);
        // die;
        if ($this->model('Pegawai_model')->tambahPegawai($_POST) > 0) {

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        }
    }

    public function hapus($id)
    {
        // var_dump($_POST);
        if ($this->model('Pegawai_model')->hapusPegawai($id) > 0) {

            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        }
    }

    public function getUbah()
    {

        echo json_encode($this->model('Pegawai_model')->getDetail($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Pegawai_model')->ubahDataPegawai($_POST) > 0) {

            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'pegawai/');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Pegawai';

        // mengambil data dari model Pegawai_model.php di folder models
        $data['pegawai'] = $this->model('Pegawai_model')->cariPegawai();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('pegawai/index', $data);
        $this->view('templates/footer');
    }
}