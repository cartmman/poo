<?php
namespace wsj\Cliente;

interface ClienteInterface {

   public function grauImportancia($grau);

   public function enderecoCobranca($end);
}