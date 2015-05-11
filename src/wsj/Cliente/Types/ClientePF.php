<?php
namespace wsj\Cliente\Types;

use wsj\Cliente\ClienteAbstract;
use wsj\Cliente\ClienteInterface;

class ClientePF extends ClienteAbstract implements ClienteInterface {

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

}