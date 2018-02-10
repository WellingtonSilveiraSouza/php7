<?php 
	// A linha abaixo recupera a sessão anterior 
	session_id('gat139rru47vi1qrdkjiguln15');
	// A linha abaixo inclue as configurações pré-determinadas no arquico "config.php".
	require_once("config.php");
	// A linha abaixo gera um novo id de sessão
	session_regenerate_id();

	echo session_id();

	echo "<br>";
	// O comando abaixo serve pra ver a estrutura da variável.
	var_dump($_SESSION);

 ?>