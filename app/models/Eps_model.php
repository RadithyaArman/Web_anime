<?php
class Eps_model {
    private $table = 'eps';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllEps() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getEpsById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db-bind('id', $id);
        return $this->db->single();
    }

    public function getEpsByAnime($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_anime=:id');
        $this->db-bind('id', $id);
        return $this->db->resultSet();
    }
}