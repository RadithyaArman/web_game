<?php
class Katalog extends Controller {
    public function index() {
        $data['judul'] = 'Katalog';
        $games = $this->model('Game_model')->getAllGame();
        $image = $this->model('Image_model');

        foreach( $games as &$g ) {
            $cover = $image->getCoverByGameId($g['id']);
            $g['cover'] = $cover ? $cover['file_path'] : 'default.jpg';
        }

        $data['games'] = $games;
        $this->view('templates/header', $data);
        $this->view('game/katalog', $data);
        $this->view('templates/footer');
    }
}