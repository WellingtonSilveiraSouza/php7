<?php 
	//Trabalhando com Orientacao a objetos em datas
	$dt = new DateTime();
	//Classe para adicionar data
	$periodo = new Dateinterval("P15D");

	echo $dt->format("d/m/Y H:i:s");
	//A linha abaixo adiciona o periodo a data atual
	$dt->add($periodo);

	echo "<br>";

	echo $dt->format("d/m/Y H:i:s");

 ?>