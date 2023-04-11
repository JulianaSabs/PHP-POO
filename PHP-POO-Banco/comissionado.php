<?php 

include_once "empregado.php";

class Comissionado extends Empregado{

		var $totalVenda;
		var $taxaComissao;


		function Comissionado__construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->totalVenda = $totalVenda;
		$this->taxaComissao = $taxaComissao;

		}

		function vencimento($salBruto){
			$salLiquido = $salBruto * 0.85;
			return $salLiquido;
		 }


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>