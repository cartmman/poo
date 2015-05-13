<?php
namespace WSJ\Cliente\Types;

use WSJ\Cliente\ClienteAbstract;
use WSJ\Cliente\PFInterface;

class ClientePF extends ClienteAbstract implements PFInterface{

    private $cpf;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
}