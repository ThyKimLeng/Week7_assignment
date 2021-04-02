<?php
    include_once "connection/Connection.php";

class CRUDOperate extends ConnectionDB
{
    private $obj= null;
    public function __construct()
    {
        $this->connectionChecker();
    }

    public function select($query){
        $this->connectionChecker();
        $stmt = $this->pdo->query($query);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $this->closeConnection();
        return $stmt;
    }
}