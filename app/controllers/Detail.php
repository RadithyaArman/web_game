<?php
class Detail extends Controller {
    public function index($id) {
        $data['judul'] = 'Detail';
        $data['game'] = $this->model('Game_model')->getGameById($id);
        $this->view('templates/header', $data);
        $this->view('detail/detail', $data);
        $this->view('templates/footer');
    }
}