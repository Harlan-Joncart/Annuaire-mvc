<?php

require_once __DIR__ . '/../Models/UserModel.php';

/**
 * Description of UserController
 *
 * @author Kevin
 */
class CategoryController {

    private $_model;

    /**
     * Instancie notre model
     */
    public function __construct() {
        $this->_model = new CategoryModel();
    }

    /**
     * Retourne un tableau associatif
     * @return Array
     */
    public function list() {
        return ["titre" => "Listing des utilisateurs",
            "description" => "Liste des utilisateurs",
            "utilisateurs" => $this->_model->list()
        ];
    }

    public function add() {
        return ["titre" => "Ajout des utilisateurs",
            "description" => "Ajout des utilisateurs"
        ];
    }

    public function delete() {
        $id = filter_var(strip_tags(trim($_GET['id'])), FILTER_SANITIZE_NUMBER_INT);
        $this->_model->delete($id);
        header("location: index.php?page=utilisateur&action=list");
        exit;
    }

    public function insert() {
        if (isset($_POST['mail'])) {
            $mail = filter_var(strip_tags(trim($_POST['mail'])), FILTER_SANITIZE_STRING);
            $mdp = filter_var(strip_tags(trim($_POST['mdp'])), FILTER_SANITIZE_STRING);
            $params = filter_var(strip_tags(trim($_POST['params'])), FILTER_SANITIZE_STRING);
            $this->_model->insert($mail, $mdp, $params);
            header("location: index.php?page=utilisateur&action=list");
            exit;
        } else {
            header("location: index.php?page=utilisateur&action=add");
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            return ["titre" => "Ajout des utilisateurs",
                "description" => "Ajout des utilisateurs",
                "utilisateur" => $this->_model->selectById((int) $_GET['id'])
            ];
        } elseif($_SERVER['REQUEST_METHOD'] == "POST") {
            $mail = filter_var(strip_tags(trim($_POST['mail'])), FILTER_SANITIZE_STRING);
            $mdp = filter_var(strip_tags(trim($_POST['mdp'])), FILTER_SANITIZE_STRING);
            $params = filter_var(strip_tags(trim($_POST['params'])), FILTER_SANITIZE_STRING);
            $id = filter_var(strip_tags(trim($_POST['id'])), FILTER_SANITIZE_STRING);
            $this->_model->update($id, $mail, $mdp, $params);
            header("location: index.php?page=utilisateur&action=list");
        }
    }

}
