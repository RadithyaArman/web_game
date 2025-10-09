<?php
class User_model {
    private $table = 'Users';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUserByUsername($username) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function addUser($data) {
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->query('INSERT INTO ' . $this->table . ' (username, email, password, role) VALUES (:username, :email, :password, :role)');
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hash);
        $this->db->bind('role', $data['role']);
        return $this->db->execute();
    }

    public function storeRememberToken($token, $userId) {
        $this->db->query('UPDATE ' . $this->table . ' SET remember_token = :token WHERE id = :id');
        $this->db->bind('token', password_hash($token, PASSWORD_DEFAULT));
        $this->db->bind('id', $userId);
        $this->db->execute();
    }

    public function getUserByToken($token) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE remember IS NOT NULL');
        $users = $this->db->resultSet();
        foreach ($users as $u) {
            if(password_verify($token, $u['remember_token'])) {
                return $u;
            }
        }
        return false;
    }

}