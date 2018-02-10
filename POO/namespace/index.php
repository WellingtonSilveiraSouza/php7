<?php 

	require_once("config.php");
	//A linha abaixo informa que sera utilizado a classe Cadastro da name space Cliente
	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Wellington Silveira de Souza");
	$cad->setEmail("wsilveirasouza@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

 ?>