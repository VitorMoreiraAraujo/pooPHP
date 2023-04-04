<?php 
// Contrato por hora
	class Horista extends Empregado{
		var $precoHora;
		var $horasTrabalhadas;

		function __construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas)
		{
			parent::__construct($nome, $sobrenome, $cpf);

			$this->precoHora = $precoHora;
			$this->horasTrabalhadas = $horasTrabalhadas;

		}

		function Vencimento(){

			
		}
	}

 ?>
