<?php

require_once __DIR__ . '/../core/Model.php';

/**
 * Description of SiteModel
 *
 * @author Kevin
 * @version 1.0.0
 * 
 */
class SiteModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->_table = "site";
    }

    /*
      avant de factoriser mon code avec l'héritage
      public function list(){
      $sql = "select * from ".$this->table;
      return $this->pdo->query($sql);
      } */

    public function insert(string $unUrl,string $unTitre, string $unDescription, int $unCategorieId, int $unUtilisateurId) {
        $sth = $this->_pdo->prepare("insert into " . $this->_table .
                " (url,titre,description,categorie_id,utilisateur_id) values(:url,:titre,:description,:categorie_id,:utilisateur_id)");
        $sth->bindParam(':url', $unUrl, PDO::PARAM_STR);
        $sth->bindParam(':titre', $unTitre, PDO::PARAM_STR);
        $sth->bindParam(':description', $unDescription, PDO::PARAM_STR);
        $sth->bindParam(':categorie_id', $unCategorieId, PDO::PARAM_INT);
        $sth->bindParam(':utilisateur_id', $unUtilisateurId, PDO::PARAM_INT);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

    public function delete(int $unId) {
        $sth = $this->_pdo->prepare("delete from " . $this->_table .
                " where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

    /**
     * Mise a jour du site
     * @param int $unId
     * @param string $unUrl
     * @param string $unTitre
     * @param string $unDescription
     * @param int $unCategorieId
     * @param int $unUtilisateurId
     * @return int
     */
    public function update(int $unId, string $unUrl,string $unTitre, string $unDescription, int $unCategorieId, int $unUtilisateurId) {
        $sth = $this->_pdo->prepare("update " . $this->_table .
                " SET url=:url,titre=:titre,description=:description,categorie_id=:categorie_id,utilisateur_id=:utilisateur_id where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        $sth->bindParam(':url', $unUrl, PDO::PARAM_STR);
        $sth->bindParam(':titre', $unTitre, PDO::PARAM_STR);
        $sth->bindParam(':description', $unDescription, PDO::PARAM_STR);
        $sth->bindParam(':categorie_id', $unCategorieId, PDO::PARAM_INT);
        $sth->bindParam(':utilisateur_id', $unUtilisateurId, PDO::PARAM_INT);
        
      // $sth->debugDumpParams();die;
        return $sth->execute();
    }

    public function selectById(int $unId) {
        $sth = $this->_pdo->prepare("select * from " . $this->_table .
                " where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll();
    }

}
