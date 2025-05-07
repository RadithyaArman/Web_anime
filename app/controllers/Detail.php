<?php
class Detail extends Controller {
    public function index($id) {
        $data['anime'] = $this->model('Anime_model')->getAnimeById($id);
        $data['eps'] = $this->model('Eps_model')->getEpsByAnime($id);
        $this->view('templates/header');
        $this->view('detail/detail', $data);
        $this->view('templates/footer');
    }

}