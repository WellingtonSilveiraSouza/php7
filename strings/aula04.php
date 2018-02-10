<?php 

	$frase = "A repeticao e mae da retencao.";

	$palavra = "mae";

	// A linha abaixo procura a posicao da palavra na frase
	$q = strpos($frase, $palavra);

	$texto = substr($frase, 0, $q);

	//var_dump($q);

	echo $texto;

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	echo "<br>";

	echo $texto2;

 ?>