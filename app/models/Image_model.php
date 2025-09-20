<?php
class Image_model {
    private $table = 'images';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getCoverByGameId($idgame) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_game=:id_game AND cover_game = 1 LIMIT 1');
        $this->db->bind('id_game', $idgame);
        return $this->db->single();
    }

    public function getImageGameById($idgame) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_game=:id_game AND cover_game = 0');
        $this->db->bind('id_game', $idgame);
        return $this->db->resultSet();
    }
}