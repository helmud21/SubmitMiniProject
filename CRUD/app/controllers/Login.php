<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';

        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function filterData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function login()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $email = $this->filterData($_POST["email"]);
            $password = $this->filterData($_POST["password"]);
            $data['users'] = $this->model('User_model')->getUsers();

            foreach ($data['users'] as $user) {
                if (($user['email'] == $email) &&
                    ($user['password'] == $password) &&
                    ($user['role'] == 'Admin')
                ) {
                    header("location: " . BASEURL);
                } else if (($user['email'] == $email) &&
                    ($user['password'] == $password) &&
                    ($user['role'] == 'Pengguna')
                ) {
                    header('location:' . BASEURL . '/home/userhome');
                }
            }
        }
    }
}
