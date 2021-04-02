<?php
class ConnectionDB
{
    private $host = 'localhost';
    private $dbname = 'test';
    private $username = 'root';
    private $passwd = 'root';

    protected $pdo = null;

    protected function connection(){
        try{
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->passwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $exception){
            echo $exception->getMessage();
        }
    }

    protected function closeConnection()
    {
        $this->pdo = null;
    }

    protected function connectionChecker(){
        if($this->pdo == null){
            $this->connection();
        }
    }
}