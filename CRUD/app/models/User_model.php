<?php

class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUser($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $role = 'Pengguna';
        $query = "INSERT INTO user VALUES ('', :nama, :email, :no_hp, :password, :konfirmasi_password, :role)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('password', $data['pass']);
        $this->db->bind('konfirmasi_password', $data['konfirmasi_password']);
        $this->db->bind('role', $role);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = 'DELETE FROM user WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataUser($data)
    {
        $query = "UPDATE user SET 
        nama=:nama, 
        email=:email,
        no_hp=:no_hp,
        password=:pass,
        konfirmasi_password=:konfirmasi_password,
        role=:role  
        WHERE id=:id";
        var_dump($query);

        $this->db->query($query);

        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('konfirmasi_password', $data['konfirmasi_password']);
        $this->db->bind('role', $data['role']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
