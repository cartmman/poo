<?php
namespace WSJ\Cliente;

abstract class ClienteAbstract implements ClienteEnderecoInterface, ClienteGrauInterface{

    private $nome;
    private $endereco;
    private $email;
    private $telefone;
    private $grau;
    private $end;

    public function grauImportancia($grau){
        $this->grau = $grau;
        return $this;
    }

    public function enderecoCobranca($end){
        $this->end = $end;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

}