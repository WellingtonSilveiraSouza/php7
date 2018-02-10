<?php 

	require_once("config.php");
	//A linha abaixo limpa a variável de sessão.
	session_unset($_SESSION['nome']);

	echo $_SESSION['nome'];
	/* A linha abaixo destroy a sessão ou seja;
	* limpa a variável de sessão e remove o usuário.
	*/
	session_destroy();

 ?>