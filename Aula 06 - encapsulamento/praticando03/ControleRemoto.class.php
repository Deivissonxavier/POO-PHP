<?php
	require_once"Controlador.php";

	class ControleRemoto implements Controlador{
		private $ligado;
		private $volume;
		private $tocando;

		public function __construct(){
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
			echo "<br>iniciando o construct</br>";
		}

		public function setLigado($ligado){
			$this->ligado = $ligado;
		}
		public function getLigado(){
			return $this->ligado;
		}
		public function setVolume($volume){
			$this->volume = $volume;
		}
		public function getVolume(){
			return $this->volume;
		}
		public function setTocando($tocando){
			$this->tocando = $tocando;
		}
		public function getTocando(){
			return $this->tocando;
		}
		public function ligar(){
			$this->setLigado(true);
		}
		public function desligar(){
			$this->setLigado(false);
		}
		public function abrirMenu(){
			if($this->getLigado()){
				echo "<br>---Menu---";
				echo "<br>Está ligado? ".($this->getLigado()?"SIM":"NÃO");
				echo "<br>Está Tocando? ".($this->getTocando()?"SIM":"NÃO");
				echo "<br>Volume: ".$this->getVolume();
				for($i = 0; $i <= $this->getVolume(); $i += 10){
					echo "|";
				}
				echo "<br>";
			}
		}
		public function fecharMenu(){
			if ($this->getLigado()) {
				echo "<br>Fechando o menu...";
			}
		}
		public function maisVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() + 5);
			} else{
				echo "<br>ERRO: está desligado!";
			}
		}
		public function menosVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() - 5);
			} else{
				echo "<br>ERRO: Está desligado!";
			}
		}
		public function ligarMudo(){
			if ($this->getLigado() && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}
		public function desligarMudo(){
			if ($this->getLigado() && $this->getVolume() == 0) {
				$this->setVolume(50);
			}
		}
		public function play(){
			if ($this->getLigado() && !($this->getTocando())) {
				$this->setTocando(true);
			}
		}
		public function pause(){
			if ($this->getLigado() && $this->getTocando()) {
				$this->setTocando(false);
			}
		}
	}
?>