<?php 
	//Incluindo o arquivo da função
	/* Diferenças entre o require e include,
	* O require exige que o arquivo exista e que esteja funcionando corretamente para executar o script. [Utilizado em pequenos projetos]
	* O include tenta funcionar mesmo que o arquivo não exista e contém mais funções como a função include_path que mesmo que não encontra a função no diretório local ele procura também dentro do diretório do servidor do PHP */
	//include "inc/aula01.php";
	//require "inc/aula01.php";
	//Se houver mais de uma chamada dentro do script ele ignora apartir da segunda
	require_once "inc/aula01.php";
	//Chamando a funcao somar
	$resultado = somar(10, 20);

	echo $resultado;
	
 ?>