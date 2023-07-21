<?php

class Home extends Controller{
    
    public function index()
    {
        $data['judul'] = 'Home'; 
        $data['users'] = $this->model('User_model')->getUsers();


        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id) 
    {
        $data['judul'] = 'Edit';
        $data['user'] = $this->model('User_model')->getUser($id);
        
        $this->view('templates/header', $data);
        $this->view('home/edit', $data);
        $this->view('templates/footer');
    }

    public function userHome()
    {
        $data['judul'] = 'Edit';
        
        $this->view('templates/header', $data);
        $this->view('home/userHome', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($_POST['password'] != $_POST['konfirmasi_password']) {
            echo 'Password tidak sama';
        } else {
            if ($this->model('User_model')->hapusDataUser($id) > 0){
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('location:' . BASEURL);
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('location:' . BASEURL);
                exit;
            }
        }  
    }

    public function update()
    {
        // echo $_POST['nama'];
        if ($this->model('User_model')->updateDataUser($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('location:' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('location:' . BASEURL);
            exit;
        }
    }
}