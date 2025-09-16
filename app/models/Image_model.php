<?php
class Image_model {
    private $table = 'image';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getCoverByGameId($gameId) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE game_id=:game_id AND cover_game = 1 LIMIT 1');
        $this->db->bind('game_id', $gameId);
        return $this->db->single();
    }

    public function getAllImageGameById($gameid) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE game_id=:game_id');
        $this->db->bind('game_id', $gameid);
        return $this->db->resultSet();
    }
}