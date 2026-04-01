<?php

require_once __DIR__ . '/../Models/SiteModel.php';

class SiteController {

    private $_model;

    public function __construct() {
        $this->_model = new SiteModel();
    }

    public function list() {
        return [
            "titre" => "Listing des sites",
            "description" => "Liste des sites",
            "sites" => $this->_model->list()
        ];
    }

    public function add() {
        return [
            "titre" => "Ajout d'un site",
            "description" => "Ajouter un site"
        ];
    }

    public function delete() {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $this->_model->delete((int)$id);
        header("location: index.php?page=site&action=list");
        exit;
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $categorie_id = filter_input(INPUT_POST, 'categorie_id', FILTER_SANITIZE_NUMBER_INT);
            $utilisateur_id = filter_input(INPUT_POST, 'utilisateur_id', FILTER_SANITIZE_NUMBER_INT);

            $this->_model->insert($url, $titre, $description, (int)$categorie_id, (int)$utilisateur_id);

            header("location: index.php?page=site&action=list");
            exit;
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            return [
                "titre" => "Modification du site",
                "description" => "Modifier un site",
                "site" => $this->_model->selectById((int)$_GET['id'])
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $categorie_id = filter_input(INPUT_POST, 'categorie_id', FILTER_SANITIZE_NUMBER_INT);
            $utilisateur_id = filter_input(INPUT_POST, 'utilisateur_id', FILTER_SANITIZE_NUMBER_INT);

            $this->_model->update((int)$id, $url, $titre, $description, (int)$categorie_id, (int)$utilisateur_id);

            header("location: index.php?page=site&action=list");
            exit;
        }
    }
}