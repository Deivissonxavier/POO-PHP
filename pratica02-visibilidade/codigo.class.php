<?php
	/*Nessa aula de POO, vamos aprender na prática como utilizar os modificadores de visibilidade public, private e protected e qual é o efeito de cada um deles.*/

	class Caneta{
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function rabiscar(){
			if($this->tampada == true){
				echo "<p>ERRO: não posso rabiscar!";
			} else{
				echo "<p>Estou rabiscando...";
			}
		}

		public function tampar(){
			$this->tampada = true;
		}

		public function destampar(){
			$this->destampar = false;
		}
	}

?>