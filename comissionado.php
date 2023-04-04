<?php 
// Funcionério público
	class Comissionado extends Empregado{
		var $totalVenda;
		var $totalComissao;

		function __construct($nome, $sobrenome, $cpf, $totalVenda, $totalComissao)
		{
			parent::__construct($nome, $sobrenome, $cpf);

			$this->totalVenda = $totalVenda;
			$this->totalComissao = $totalComissao;

		}

		function Vencimento(){

			
		}
	}

 ?>