<?php 
	/* Tipos de dados */
	$nome = "Hcode";
	$site = 'www.hcode.com.br';

	$ano = 1980;
	$salario = 5500.99;
	$bloqueado = false;
	/* Arrays */
	$frutas = array("laranja","manga","abacaxi");

	//echo $frutas[2];

	$nascimento = new DateTime();

	//var_dump($nascimento);

	$arquivo = fopen("aula03.php", "r");

	//var_dump($arquivo);
?>