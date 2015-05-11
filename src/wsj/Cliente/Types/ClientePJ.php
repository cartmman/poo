<?php
namespace wsj\Cliente\Types;

use wsj\Cliente\ClienteAbstract;
use wsj\Cliente\ClienteInterface;

class ClientePJ extends ClienteAbstract implements ClienteInterface {

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