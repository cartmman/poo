<?php
namespace WSJ\Database;

use WSJ\Cliente\Types\ClientePF;
use WSJ\Cliente\Types\ClientePJ;
use WSJ\Cliente\ClienteAbstract;

class Persist
{

    private $pdo;


    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;        
    }

    public function listClientes($order = 'ASC') {
        $sql  = "SELECT * FROM clientes ORDER BY nome_razao {$order}";
        $res = $this->pdo->query($sql);
        $ret  = $res->fetchAll(\PDO::FETCH_ASSOC);
        
        return  $ret;
    }

    public function persistCliente(ClienteAbstract $cliente) {
        
        $sql = "INSERT INTO clientes(nome_razao,cpf_cnpj,tipo,endereco,telefone,email,grau,cobranca) 
                VALUES(:nome_razao,:cpf_cnpj,:tipo,:endereco,:telefone,:email,:grau,:cobranca)";
        
        $this->pdo->setAttribute(\PDO::ATTR_AUTOCOMMIT, FALSE);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        $this->pdo->beginTransaction();
        
        $stmt = $this->pdo->prepare($sql);
        
        $endereco = $cliente->getEndereco();
        $telefone = $cliente->getTelefone();
        $email    = $cliente->getEmail();
        $grau     = $cliente->getGrau();
        $end      = $cliente->getEnd();
                        
        if ($cliente instanceof ClientePF) {
            $nome = $cliente->getNome();
            $stmt->bindParam(':nome_razao', $nome, \PDO::PARAM_STR);
        } else {
            $razao = $cliente->getRazaoSocial();
            $stmt->bindParam(':nome_razao', $razao, \PDO::PARAM_STR);
        }
        
        if ($cliente instanceof ClientePF) {
            $cpf = $cliente->getCpf();
            $stmt->bindParam(':cpf_cnpj', $cpf, \PDO::PARAM_STR);
        } else {
            $cnpj = $cliente->getCnpj();
            $stmt->bindParam(':cpf_cnpj', $cnpj, \PDO::PARAM_STR);
        }
        
        if ($cliente instanceof ClientePF) {
            $tipo = "Pessoa Física";
            $stmt->bindParam(':tipo', $tipo, \PDO::PARAM_STR);
        } else {
            $tipo = "Pessoa Jurídica";
            $stmt->bindParam(':tipo', $tipo, \PDO::PARAM_STR);
        }
        
        $stmt->bindParam(':endereco', $endereco, \PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->bindParam(':grau', $grau, \PDO::PARAM_INT);
        $stmt->bindParam(':cobranca', $end, \PDO::PARAM_STR);
        
        try {            
            $stmt->execute();
            return $this;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            $this->pdo->rollBack();
        }                           
    }

    public function flush() {
        
        try {
            $this->pdo->commit();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
                
    }
    
    public function criaTable() {
        
        try {
            $res = $this->pdo->exec("
                          DROP TABLE IF EXISTS clientes;
                          CREATE TABLE IF NOT EXISTS clientes (                          
                          nome_razao VARCHAR(100),
                          cpf_cnpj VARCHAR(20),
                          tipo VARCHAR(30),
                          endereco VARCHAR(100),
                          telefone VARCHAR(30),
                          email VARCHAR(100),                          
                          grau INTEGER,
                          cobranca VARCHAR(100))");            
        } catch (\PDOException $e) {
            $e->getMessage();
        }    
                    
    }
    
}