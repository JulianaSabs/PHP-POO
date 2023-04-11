<?php 
 
 class Empregado{
 	var $nome;
 	var $sobrenome;
 	var $cpf;

 	function vencimento($salBruto){
        $salLiquido = $salBruto * 0.85;
		return $salLiquido;
 	}

        function Empregado__construct($nome, $sobrenome, $cpf){

            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->cpf = $cpf;

        }

        function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


 }


?>