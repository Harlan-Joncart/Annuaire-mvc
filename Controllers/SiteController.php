<?php

require_once __DIR__ . '/../Models/SiteModel.php';

/**
 * Description of SiteController
 *
 * @author Kevin
 */
class SiteController {

    private $_model;

    /**
     * Instancie notre model
     */
    public function __construct() {
        $this->_model = new SiteModel();
    }

    /**
     * Retourne un tableau associatif
     * @return Array
     */
    public function list() {
        return ["titre" => "Listing des sites",
            "description" => "Liste des sites",
            "sites" => $this->_model->list()
        ];
    }

    public function add() {
        return ["titre" => "Ajout des sites",
            "description" => "Ajout des sites"
        ];
    }

    public function delete() {
        $id = filter_var(strip_tags(trim($_GET['id'])), FILTER_SANITIZE_NUMBER_INT);
        $this->_model->delete($id);
        header("location: index.php?page=site&action=list");
        exit;
    }

    public function insert() {
        if (isset($_POST['libelle'])) {
            $libelle = filter_var(strip_tags(trim($_POST['libelle'])), FILTER_SANITIZE_STRING);
            $this->_model->insert($libelle);
            header("location: index.php?page=site&action=list");
            exit;
        } else {
            header("location: index.php?page=site&action=add");
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            return ["titre" => "Ajout des sites",
                "description" => "Ajout des sites",
                "site" => $this->_model->selectById((int) $_GET['id'])
            ];
        } elseif($_SERVER['REQUEST_METHOD'] == "POST") {
            $libelle = filter_var(strip_tags(trim($_POST['libelle'])), FILTER_SANITIZE_STRING);
            $id = filter_var(strip_tags(trim($_POST['id'])), FILTER_SANITIZE_STRING);
            $this->_model->update($id, $libelle);
            header("location: index.php?page=site&action=list");
        }
    }

}
