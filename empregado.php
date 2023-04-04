<?php 

class Empregado {
	var $nome;
	var $sobrenome;
	var $cpf;

	function __construct($nome, $sobrenome, $cpf)
	{
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->cpf = $cpf;
	}

	function Vencimento($salarioBruto)
	{
		$inss = 0.0;
		$ir = 0.0;
		$sl = 0;
		// INSS 
		if ($salarioBruto <= 1212) {

			$inss = $salarioBruto * 0.075;

			$sl = $salarioBruto - $inss;

		} else if ($salarioBruto < 2427.35) {

			$inss = $salarioBruto * 0.09;

			$sl = $salarioBruto - $inss;

		}else if ($salarioBruto < 3641.03) {

			$inss = $salarioBruto * 0.12;

			$sl = $salarioBruto - $inss;

		} else {
			$inss = $salarioBruto * 0.14;

			$sl = $salarioBruto - $inss;

		}

		//IR
		if ($salarioBruto > 1903.98) {

			$ir = $salarioBruto * 0.075;

			$sl = $salarioBruto - $ir; 

		} else if ($salarioBruto > 2826.65) {

			$ir = $salarioBruto * 0.15;

			$sl = $salarioBruto - $ir;

		}else if ($salarioBruto > 3751.05) {

			$ir = $salarioBruto * 0.225;

			$sl = $salarioBruto - $ir;

		} else if ($salarioBruto > 4664.68) {

			$ir = $salarioBruto * 0.275;

			$sl = $salarioBruto - $inss;

		}
	}
}
 ?>