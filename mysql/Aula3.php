<?php
	//A linha abaixo cria a conexao com o banco
	$conn = new mysqli("localhost","root","","dbphp7");
	//A linha abaixo verifica se a conexao foi bem sucedida, se houve erro sera mostrado na tela
	if ($conn->connect_error){
		echo "Error: " .$conn->connect_error;
	}
	/*	A linha abaixo cria uma variavel $result que recebera as informacoes da query que sera executada	*/
	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");	
	//A linha abaixo cria a variavel data
	$data = array();
	
	WHILE ($row = $result->fetch_assoc()) {
		array_push($data, $row);
	}
	
	echo json_encode($data);
	
?>