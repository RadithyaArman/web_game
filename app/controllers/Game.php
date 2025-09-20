<?php
class Game extends Controller {
    // Halaman utama katalog
    public function index() {
        $games = $this->model('Game_model')->getAllGame();
        $image = $this->model('Image_model');

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $this->view('game/katalog', ['games' => $games]);
    }


    // Handle Ajax Search
    public function search() {
        $keyword = isset($_POST['keyword']) ? trim($_POST['keyword']) : '';
        $games = $this->model('Game_model')->searchGame($keyword);
        $image = $this->model('Image_model');

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $this->view('game/list_katalog', ['games' => $games]);
    }

    // Handle Ajax Sort
    public function sort() {
        $order = isset($_POST['order']) ? $_POST['order'] : 'asc';
        $games = $this->model('Game_model')->sortGame($order);
        $image = $this->model('Image_model');

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $this->view('game/list_katalog', ['games' => $games]);
    }


}