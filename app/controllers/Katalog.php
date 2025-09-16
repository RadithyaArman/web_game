<?php
class Katalog extends Controller {
    public function index() {
        $data['judul'] = 'Katalog';
        $data['game'] =$this->model('Game_model')->getAllGame();
        $this->view('templates/header', $data);
        $this->view('game/katalog', $data);
        $this->view('templates/footer');
    }
}