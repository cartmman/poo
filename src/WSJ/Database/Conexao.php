<?php
namespace WSJ\Database;

class Conexao
{
    public $pdo;

    public function __construct() 
    {
        try {
            $this->pdo = new \PDO("mysql:dbname=poo;host=localhost","root","");            
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function getPdo() 
    {
        return $this->pdo;
    }
    
}