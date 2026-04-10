<?php

class AccueilModel {
    private $pdo;
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=produits;host=localhost","root","");
    }

}
