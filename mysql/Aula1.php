<?php
	//A linha abaixo cria a conexao com o banco
	$conn = new mysqli("localhost","root","","dbphp7");
	//A linha abaixo verifica se a conexao foi bem sucedida, se houve erro sera mostrado na tela
	if ($conn->connect_error){
		echo "Error: " .$conn->connect_error;
	}else{
		echo "Conectado! ";
	}
	//A linha abaixo prepara o comando a ser executado
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
	/*A linha abaixo define os tipos de dados a serem eviados atraves do "bind_param",
	 as letras "ss" informam que os dados a serem recebidos sao strings, logo apos temos os parametros a serem passados.*/
	$stmt->bind_param("ss", $login, $pass);
	//As linhas abaixo atribuem valor aos parametros $login e $pass.
	$login = "user";
	$pass = "12345";
	//A linha abaixo executa o comando acima 
	$stmt->execute();
	
	//As linhas abaixo atribuem valor aos parametros $login e $pass.
	$login = "user2";
	$pass = "54321";
	//A linha abaixo executa o comando acima 
	$stmt->execute();
	
	//As linhas abaixo atribuem valor aos parametros $login e $pass.
	$login = "user3";
	$pass = "13467";
	//A linha abaixo executa o comando acima 
	$stmt->execute();
	
?>