<?php 
	//Passagem de parametro por valor
	$a = 10;

	function trocaValor($a){

		$a += 50;

		return $a;

	}

	echo trocaValor($a);
	echo "<br>";
	echo $a;

 ?>