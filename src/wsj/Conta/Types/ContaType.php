<?php
namespace wsj\Conta\Types;

use wsj\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata {

	public function calculoDeposito($valor)	{
		return $valor += 10;
	}
}