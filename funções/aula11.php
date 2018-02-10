<?php 
	//Declaração de tipos escalares
	function soma(int ...$valores):string {

		return array_sum($valores);

	}

	function somar(float ...$valores):float {

		return array_sum($valores);

	}

	echo var_dump(soma(2, 2));
	echo "<br>";
	echo soma(25, 33);
	echo "<br>";
	echo soma(1.5, 3.2);
	echo "<br>";

	echo var_dump(somar(2.6, 3.7));
	echo "<br>";
	echo somar(25, 33);
	echo "<br>";
	echo somar(1.5, 3.2);
	echo "<br>";

 ?>