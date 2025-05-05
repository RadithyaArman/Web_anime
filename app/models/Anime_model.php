<?php
class Anime_model {
    private $table = 'anime';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllAnime() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAnimeById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    
}