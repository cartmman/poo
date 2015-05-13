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
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setRazaoSocial($razaoSocial)
    {
        return $this->razaoSocial = $razaoSocial;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

}