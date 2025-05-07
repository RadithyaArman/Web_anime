<?php
class Eps extends Controller {
    public function Index($id) {
        $data['anime'] = $this->model('Anime_model')->getAnimeById($id);
        $data['eps'] = $this->model('Eps_model')->getEpsByAnime($id);
        $this->view('templates/header');
        $this->view('eps/eps', $data);
        $this->view('templates/footer');
    }

}