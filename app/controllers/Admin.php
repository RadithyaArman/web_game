<?php
class Admin extends Controller {
    private $gameModel;
    private $genreModel;
    private $imageModel;

    public function __construct() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header('Location: ' . BASEURL . '/auth');
            exit;
        }
        $this->gameModel = $this->model('Game_model');
        $this->genreModel = $this->model('Genre_model');
        $this->imageModel = $this->model('Image_model');
    }

    // Daftar Game
    public function index() {
        $games= $this->gameModel->getAllGame();
        $images = $this->imageModel;
        $genres = $this->genreModel;

        foreach( $games as &$g ) {
            $cover = $images->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
            
            $genre = $genres->getGenreByGame($g['id']);
            $g['genre'] = $genre;
        }

        $data['judul'] = 'Admin Panel';
        $data['games'] = $games;

        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }

    // Tambah Game
    public function tambah() {
        $genres = $this->genreModel->getAllGenre();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->gameModel->addGame($_POST, $_FILES)) {
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                $data['error'] = 'Gagal menambah game';
            }
        }
    
        $data['genres'] = $genres;

        $this->view('templates/header', $data);
        $this->view('admin/tambah', $data);
        $this->view('templates/footer');
    }

    // Edit Game 
    public function edit($id) {
        $games= $this->gameModel->getGameById($id);
        $genres = $this->genreModel->getAllGenre();    
        $select_genres = $this->genreModel->getGenreById($id);   
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->gameModel->updateGame($_POST, $_FILES)) {
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                $data['error'] = 'Gagal mengupdate game';
            }
        }

        $data['games'] = $games;
        $data['genres'] = $genres;
        $data['select_genre'] = $select_genres;

        $this->view('templates/header', $data);
        $this->view('admin/edit', $data);
        $this->view('templates/footer');
    }

    // Hapus game
    public function delete($id) {
        $this->gameModel->deleteGame($id);
        header('Location: ' . BASEURL . '/admin');
        exit;
    }


}