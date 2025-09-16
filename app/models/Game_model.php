<?php
class Game_model { 
    private $table = 'games';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Ambil semua game
    public function getAllGame() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // Ambil Game dari id
    public function getGameById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // Cari game berdasarkan keyword
    public function searchGame($keyword) {
        if($keyword === '') {
            $this->db->query("SELECT * FROM {$this->table}");
        } else {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE judul LIKE :keyword');
            $this->db->bind(':keyword', "%$keyword%");
        }
        return $this->db->resultSet();
    }

    // Sort game ASC / DESC berdasarkan nama
    public function sortGame($order = 'asc') {
        $order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC';
        $this->db->query("SELECT * FROM  {$this->table} ORDER BY judul $order");
        return $this->db->resultSet();
    }
}