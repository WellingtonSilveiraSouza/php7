<?php 

	$qualASuaIdade = 125;
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;
	// A estrutura if else serve para verificar duas condições, e somente pode conter um else.
	//A estrutura if elsif deve obrigatóriamente ter pelo menos 3 condições para verificar.
	if ($qualASuaIdade < $idadeCrianca) {

		echo "Criança";

	} else if ($qualASuaIdade < $idadeMaior) {

		echo "Adolescente";
	
	} else if ($qualASuaIdade < $idadeMelhor) {

		echo "Adulto";
	
	} else {

		echo "Idoso";
	}

	echo "<br>";

	echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>