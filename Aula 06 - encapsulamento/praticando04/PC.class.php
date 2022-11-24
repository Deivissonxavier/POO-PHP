<?php
	include_once"Computador.php";
	class PC implements Computador{
		private $ligado;
		private $programando;
		private $navegando;

		public function setLigado($ligado){
			$this->ligado = $ligado;
		}
		public function getLigado(){
			return $this->ligado;
		}

		public function setProgramando($programando){
			$this->programando = $programando;
		}
		public function getProgramando(){
			return $this->programando;
		}
		public function setNavegando($navegando){
			$this->navegando = $navegando;
		}
		public function getNavegando(){
			return $this->navegando;
		}
		public function __construct(){
			$this->setLigado(false);
			$this->setNavegando(false);
			$this->setProgramando(false);
		}
		public function ligar(){
			$this->setLigado(true);
		}
		public function desligar(){
			$this->setLigado(false);
		}
		public function navegar(){
			if($this->getLigado()){
				$this->setNavegando(True);
				echo "<br>Navegando....</br>";
			} else{
				echo "<br>ERRO: está desligado!</br>";
			}
		}
		public function programar(){
			if ($this->getLigado()) {
				$this->setProgramando(true);
				echo "<br>Programando</br>";
			} else{
				echo "<br>ERRO: está desligado!</br>";
			}
		}

	}
?>