<?php
namespace WSJ\Cliente\Types;

use WSJ\Cliente\ClienteAbstract;
use WSJ\Cliente\ClienteEnderecoInterface;
use WSJ\Cliente\ClienteGrauInterface;

class ClientePJ extends ClienteAbstract implements ClienteGrauInterface, ClienteEnderecoInterface {

    private $cnpj;
    private $grau;
    private $end;

    public function grauImportancia($grau){
        $this->grau = $grau;
    }

    public function enderecoCobranca($end){
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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

}