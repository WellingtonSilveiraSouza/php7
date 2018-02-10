<?php 
//As linhas abaixo criam a interface das classes
//O papel da interface e delarar o que precisa ter na classe
interface Veiculo { 

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}
//As linhas abaixo criam uma classe abstrata
abstract class AUtomovel implements Veiculo {

	public function acelerar($velocidade)
	{
		echo "O veiculo acelerou ate ".$velocidade." km/h";
	}

	public function frenar($velocidade)
	{
		echo "O veiculo frenou ate ".$velocidade." km/h.";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veiculo engatou a marcha ".$marcha;
	}

}
	//As linhas abaixo criam uma classe extendida
	class DelRey extends AUtomovel {

		public function empurrar(){

		}
	}

$carro = new DelRey();

$carro->acelerar(200);
?>