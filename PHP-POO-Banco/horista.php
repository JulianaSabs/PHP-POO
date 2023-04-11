<?php 
include_once "empregado.php";

	class Horista extends Empregado{

	

		var $precoHora;
		var $horasTrabalhadas;

		function Horista__construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->precoHora = $precoHora;
		$this->horasTrabalhadas = $horasTrabalhadas;

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