<?php
class Genre_model {
    private $table = 'genres';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllGenre() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGenreByGame($idgame) {
        $this->db->query('SELECT g.* FROM ' . $this->table . ' g JOIN game_genre gg ON g.id = gg.id_genre WHERE gg.id_game = :id_game');
        $this->db->bind('id_game', $idgame);
        return $this->db->resultSet();
    }

}

