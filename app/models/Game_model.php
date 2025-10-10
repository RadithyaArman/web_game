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
        $game = $this->db->single();

        $this->db->query('SELECT file_path FROM images WHERE id_game = :id_game AND cover_game = 1');
        $this->db->bind('id_game', $id);
        $cover = $this->db->single();

        $game['cover'] = $cover ? $cover['file_path'] : '';

        return $game;
    }

    // Ambil Game dari rating tertinggi
    public function getTopGame() {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE rating >= 7.0 ORDER BY rating DESC LIMIT 5');
        return $this->db->resultSet();
    }

    // Ambil Game dari Genre
    public function getGamesByGenre($idgenre) {
        $this->db->query('SELECT g.* FROM ' . $this->table . ' g JOIN game_genre gg ON g.id = gg.id_game WHERE gg.id_genre = :id_genre');
        $this->db->bind('id_genre', $idgenre);
        return $this->db->resultSet();
    }

    // Cari game berdasarkan keyword
    public function searchGame($keyword) {
        if($keyword === '') {
            $this->db->query("SELECT * FROM {$this->table}");
        } else {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE title LIKE :keyword');
            $this->db->bind('keyword', "%$keyword%");
        }
        return $this->db->resultSet();
    }

    // Sort game ASC / DESC berdasarkan nama
    public function sortGame($order = 'asc') {
        $order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC';
        $this->db->query("SELECT * FROM  {$this->table} ORDER BY title $order");
        return $this->db->resultSet();
    }

    // Tambah
    public function addGame($data, $files) {
        $query = "INSERT INTO {$this->table} (`title`, `deskripsi`, `rating`, `release`, `developer`, `publisher`) VALUES (:title, :deskripsi, :rating, :release, :developer, :publisher)";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('release', $data['release']);
        $this->db->bind('developer', $data['developer']);
        $this->db->bind('publisher', $data['publisher']);
        $this->db->execute();

        $game_id = $this->db->lastInsertId();

        if(!empty($data['cover'])) {
            $this->db->query("INSERT INTO images (id_game, file_path, cover_game) VALUES (:id_game, :file_path, 1)");
            $this->db->bind('id_game', $game_id);
            $this->db->bind('file_path', $data['cover']);
            $this->db->execute();
        }

        if(isset($data['genres'])) {
            foreach($data['genres'] as $id_genre) {
                $this->db->query("INSERT INTO game_genre (id_game, id_genre) VALUES (:game, :genre)");
                $this->db->bind('game', $game_id);
                $this->db->bind('genre', $id_genre);
                $this->db->execute();
            }
        }
        return true;
    }

    // Edit
    public function updateGame($data) {
        $query = "UPDATE games SET `title` = :title, `deskripsi` = :deskripsi, `rating` = :rating, `release` = :release, `developer` = :developer, `publisher` = :publisher WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('rating', $data['rating']);
        $this->db->bind('release', $data['release']);
        $this->db->bind('developer', $data['developer']);
        $this->db->bind('publisher', $data['publisher']);
        $this->db->execute();

        if (!empty($data['cover'])) {
            $this->db->query("UPDATE images SET file_path = :file_path WHERE id_game = :id_game AND cover_game = 1");
            $this->db->bind('file_path', $data['cover']);
            $this->db->bind('id_game', $data['id']);
            $this->db->execute();
        }

        $this->db->query("DELETE FROM game_genre WHERE id_game = :id");
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        if (isset($data['genres'])) {
            foreach ($data['genres'] as $id_genre) {
                $this->db->query("INSERT INTO game_genre (id_game, id_genre) VALUES (:game, :genre)");
                $this->db->bind('game', $data['id']);
                $this->db->bind('genre', $id_genre);
                $this->db->execute();
            }
        }
        return true;
    }

    // Delete
    public function deleteGame($id) {
        $this->db->query("DELETE FROM images WHERE id_game = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        $this->db->query("DELETE FROM game_genre WHERE id_game = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        $this->db->query("DELETE FROM games WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->execute();
    }



}