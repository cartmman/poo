<?php
namespace WSJ\Cliente\Types;

use WSJ\Cliente\ClienteAbstract;
use WSJ\Cliente\PJInterface;

class ClientePJ extends ClienteAbstract implements PJInterface {

    private $cnpj;
    private $razaoSocial;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

}