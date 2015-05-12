<?php
namespace WSJ\Conta\Types;

use WSJ\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata {

	public function calculoDeposito($valor)	{
		return $valor += 10;
	}
}