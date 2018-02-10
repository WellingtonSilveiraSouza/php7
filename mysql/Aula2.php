<?php
	//A linha abaixo cria a conexao com o banco
	$conn = new mysqli("localhost","root","","dbphp7");
	//A linha abaixo verifica se a conexao foi bem sucedida, se houve erro sera mostrado na tela
	if ($conn->connect_error){
		echo "Error: " .$conn->connect_error;
	}else{
		echo "Conectado! ";
	}
	/*	A linha abaixo cria uma variavel $result que recebera as informacoes da query que sera executada	*/
	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");	
	
	WHILE ($row = $result->fetch_array()) {
		var_dump($row);
	}
	
?>