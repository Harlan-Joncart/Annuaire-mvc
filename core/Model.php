<?php

require_once __DIR__ . '/Db.php';

class Model {

    protected $_pdo;
    protected $_table;

    /**
     * Instancie l'attribut PDO depuis mon Singleton
     * 
     */
    public function __construct() {
        $this->_pdo = Db::getInstance()->getPdo();
    }
    /**
     * Retourne le jeu d'enregistrement des catégories
     * 
     * @return PDOStatement
     */
    public function list() {
        $sql = "select * from " . $this->_table;
        return $this->_pdo->query($sql);
    }

    public function delete(int $unId) {
        $sth = $this->_pdo->prepare("delete from " . $this->_table .
                " where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

}
