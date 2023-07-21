<?php

class Pendaftaran extends Controller {
    public function index()
    {
        $data['judul'] = 'Pendaftaran';

        $this->view('templates/header', $data);
        $this->view('pendaftaran/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($_POST['password'] != $_POST['konfirmasi_password']) {
            echo 'Password tidak sama';
        }

        if ($this->model('User_model')->tambahDataUser($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location:' . BASEURL . '/login');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location:' . BASEURL . '/login');
            exit;
        }
    }
}