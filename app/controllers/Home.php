<?php
class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $gameModel = $this->model('Game_model');
        $imageModel = $this->model('Image_model');
        $genreModel = $this->model('Genre_model');

        $games = $gameModel->getAllGame();
        $topGames = $gameModel->getTopGame();
        $image = $imageModel;
        $genres = $genreModel->getAllGenre();

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
            
            $genre = $genreModel->getGenreByGame($g['id']);
            $g['genre'] = $genre;
        }
        foreach( $topGames as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';

            $genre = $genreModel->getGenreByGame($g['id']);
            $g['genre'] = $genre;
        }

        $data['games'] = $games;
        $data['topGames'] = $topGames;
        $data['genres'] = $genres;
        $data['titleMiddle'] = "Game Lists";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


    public function genre($idgenre) {
        $data['judul'] = 'Home';
        $gameModel = $this->model('Game_model');
        $imageModel = $this->model('Image_model');
        $genreModel = $this->model('Genre_model');

        $games = $gameModel->getGamesByGenre($idgenre);
        $topGames = $gameModel->getTopGame();
        $genres = $genreModel->getAllGenre();
        $titleMiddle = $genreModel->getGenreByid($idgenre);
        $image = $imageModel;

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
            
            $genre = $genreModel->getGenreByGame($g['id']);
            $g['genre'] = $genre;
        }
        foreach( $topGames as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';

            $genre = $genreModel->getGenreByGame($g['id']);
            $g['genre'] = $genre;
        }

        $data['games'] = $games;
        $data['topGames'] = $topGames;
        $data['genres'] = $genres;
        $data['titleMiddle'] = $titleMiddle ? $titleMiddle['name'] : "";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    
}