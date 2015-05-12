<?php
namespace WSJ\Cliente\Types;

use WSJ\Cliente\ClienteAbstract;
use WSJ\Cliente\ClienteEnderecoInterface;
use WSJ\Cliente\ClienteGrauInterface;

class ClientePF extends ClienteAbstract implements ClienteGrauInterface, ClienteEnderecoInterface {

    private $cpf;
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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
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