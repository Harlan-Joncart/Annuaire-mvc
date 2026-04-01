<?php

require_once __DIR__ . '/../Models/UserModel.php';

class UserController {

    private $_model;

    public function __construct() {
        $this->_model = new UserModel();
    }

    public function list() {
        return [
            "titre" => "Listing des utilisateurs",
            "description" => "Liste des utilisateurs",
            "users" => $this->_model->list()
        ];
    }

    public function add() {
        return [
            "titre" => "Ajout d'un utilisateur",
            "description" => "Ajouter un utilisateur"
        ];
    }

    public function delete() {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $this->_model->delete((int)$id);
        header("location: index.php?page=user&action=list");
        exit;
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $params = filter_input(INPUT_POST, 'params', FILTER_SANITIZE_STRING);

            $this->_model->insert($mail, $mdp, $params);

            header("location: index.php?page=user&action=list");
            exit;
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            return [
                "titre" => "Modification utilisateur",
                "description" => "Modifier un utilisateur",
                "user" => $this->_model->selectById((int)$_GET['id'])
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            $params = filter_input(INPUT_POST, 'params', FILTER_SANITIZE_STRING);

            $this->_model->update((int)$id, $mail, $mdp, $params);

            header("location: index.php?page=user&action=list");
            exit;
        }
    }
}