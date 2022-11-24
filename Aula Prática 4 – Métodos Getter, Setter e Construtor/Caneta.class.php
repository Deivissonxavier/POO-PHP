<?php
	class Caneta{
		public $modelo;
		private $ponta;
		private $cor;
		private $tampada;

		public function __construct($m, $c, $p){ /// pode ser __construct ou nome da classe
			$this->modelo = $m;
			$this->cor = $c;
			$this->ponta = $p;
			$this->tampar();
		}

		public function tampar(){
			$this->tampada = true;
		}
		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($m){
			$this->modelo = $m;
		}

		public function getPonta(){
			return $this->ponta;
		}

		public function setPonta($p){
			$this->ponta = $p;
		}
	}
?>