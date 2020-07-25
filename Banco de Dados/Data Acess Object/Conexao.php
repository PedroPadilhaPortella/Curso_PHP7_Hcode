<?php

class Conexao extends PDO{
    private $conexao;

    public function __construct() {
        $this->conexao = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
    }


    private function setParams($statement, $params = array()) {
        foreach($params as $key => $value) {
            $this->setParam($key, $value);
        }
    }


    private function setParam($statement, $key, $value) {
        $statement->bindParams($key, $value);
    }


    public function query($rawQuery, $params = array()) {
        $statement = $this->conexao->prepare($rawQuery);
        $this->setParams($statement, $params);

        return $statement;
    }


    public function select($rawQuery, $params = array()):array {
        $statement = $this->query($rawQuery, $params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}