<?php

require_once __DIR__ . '/../core/Model.php';

class UserModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->_table = "utilisateur";
    }

    /*
      avant de factoriser mon code avec l'héritage
      public function list(){
      $sql = "select * from ".$this->table;
      return $this->pdo->query($sql);
      } */

    public function insert(string $unMail, string $unMdp, string $unParams) {
        $sth = $this->_pdo->prepare("insert into " . $this->_table .
                " (mail,mdp,params) values(:mail,:mdp,:params)");
        $sth->bindParam(':mail', $unMail, PDO::PARAM_STR);
        $sth->bindParam(':mdp', $unMdp, PDO::PARAM_STR);
        $sth->bindParam(':params', $unParams, PDO::PARAM_STR);
        //  $this->_pdo->debugDumpParams();
        return $sth->execute();
    }

    /**
     * Mise a jour de l'utilisateur
     * @param int $unId
     * @param string $unMail
     * @param string $unMdp
     * @param string $unParams
     * @return int
     */
    public function update(int $unId, string $unMail, string $unMdp, string $unParams) {
        $sth = $this->_pdo->prepare("update " . $this->_table .
                " SET mail=:mail, mdp=:mdp, params=:params where id = :id");
        $sth->bindParam(':id', $unId, PDO::PARAM_INT);
        $sth->bindParam(':mail', $unMail, PDO::PARAM_STR);
        $sth->bindParam(':mdp', $unMdp, PDO::PARAM_STR);
        $sth->bindParam(':params', $unParams, PDO::PARAM_STR);
        
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
