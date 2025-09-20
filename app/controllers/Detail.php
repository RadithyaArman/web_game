<?php
class Detail extends Controller {
    public function index($id) {
        $data['judul'] = 'Detail';
        $data['games'] = $this->model('Game_model')->getGameById($id);
        $data['genres'] = $this->model('Genre_model')->getGenreByGame($id);
        $data['images'] = $this->model('Image_model')->getImageGameById($id);
        $this->view('templates/header', $data);
        $this->view('detail/detail', $data);
        $this->view('templates/footer');
    }
}