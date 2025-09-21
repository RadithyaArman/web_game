<?php
class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $gameModel = $this->model('Game_model');
        $imageModel = $this->model('Image_model');

        $games = $gameModel->getAllGame();
        $topGames = $gameModel->getTopGame();
        $image = $imageModel;
        $data['genres'] = $this->model('Genre_model')->getAllGenre();

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }
        foreach( $topGames as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $data['games'] = $games;
        $data['topGames'] = $topGames;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


    public function genre($idgenre) {
        $data['judul'] = 'Home';
        $gameModel = $this->model('Game_model');
        $imageModel = $this->model('Image_model');

        $games = $gameModel->getGamesByGenre($idgenre);
        $topGames = $gameModel->getTopGame();
        $image = $imageModel;
        $data['genres'] = $this->model('Genre_model')->getAllGenre();

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }
        foreach( $topGames as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $data['games'] = $games;
        $data['topGames'] = $topGames;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    
}