<?php

	/*  
		$anoNascimento = 1980;
		$nomeCompleto = "Wellington Silveira de Souza";

	*/

		$nome1 = "Wellington";
		$sobrenome = "Silveira de Souza";

		$nomeCompleto = $nome1 ." ". $sobrenome;

		echo $nomeCompleto;

		exit;

		echo "<br>";
		echo $nome1;
		echo $sobrenome;

		echo "<br>";
		//unset($nome1);
		if (isset($nome1)){
			echo $nome1;
		}

?>