<?php 

		//JSON - Include e Decode 
	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'João',
		'idade'=>20
	));

	array_push($pessoas, array(
		'nome'=>'Glaucio',
		'idade'=>25
	));
	// json encode transforma o array em json
	echo json_encode($pessoas);

 ?>
