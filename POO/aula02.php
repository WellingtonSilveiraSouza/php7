<?php 
//Estrutura da classe
class Carro {
	//As linhas abaixo definem os atributos
	private $modelo;
	private $motor;
	private $ano;
	//As linhas abaixo criam os metodos
	public function getModelo(){//Metodo

		return $this->modelo;

	}

	public function setModelo($modelo){

		$this->modelo = $modelo;

	}
	//A linha a baixo cria um retorno de valor de ponto 
	//flutuante ou seja com casas decimais
	public function getMotor():float{//Metodo

		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;

	}
	//A linha abaixo faz o cast das informacoes de retorno
	//Criando um retorno de valor inteiro
	public function getAno():int{//Metodo

		return $this->ano;

	}

	public function setAno($ano){

		$this->ano = $ano;

	}
	//A linha abaixo cria o metodo exibir
	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor" =>$this->getMotor(),
			"ano"   =>$this->getAno()
		);

	}

}

//As linhas abaixo atribuem os valores aos atributos do objeto
$gol = new Carro();//Criando um novo objeto
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

//A linha abaixo chama o metodo exibir e imprime na tela
print_r($gol->exibir());
echo "<br>";
var_dump($gol->exibir());//Mostra a estrutura do objeto



?>