<?php
class Home extends Controller {
    public function index() {
        $data['anime'] = $this->model('Anime_model')->getAllAnime();
        $data['eps'] = $this->model('Eps_model')->getAllEps();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}