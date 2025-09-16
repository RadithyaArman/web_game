<?php
class Game extends Controller {
    // Halaman utama katalog
    public function index() {
        $games = $this->model('Game_model')->getAllGame();
        $this->view('game/katalog', ['game' => $games]);
    }


    // Handle Ajax Search
    public function search() {
        $keyword = isset($_POST['keyword']) ? trim($_POST['keyword']) : '';
        $games = $this->model('Game_model')->searchGame($keyword);
        $this->view('game/list_katalog', ['game' => $games]);
    }

    // Handle Ajax Sort
    public function sort() {
        $order = isset($_POST['order']) ? $_POST['order'] : 'asc';
        $games = $this->model('Game_model')->sortGame($order);
        $this->view('game/list_katalog', ['game' => $games]);
    }


}