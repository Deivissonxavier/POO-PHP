<?php
	class Caneta{
		public $modelo;
		private $ponta;
		private $cor;
		private $tampada;

		function __construct($modelo, $cor, $ponta){
			$this->modelo=$modelo;
			$this->ponta=$ponta;
			$this->cor=$cor;
			$this->tampar();

		}

		public function tampar(){
			$this->tampar = true;
		}

		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo=$modelo;
		}
		public function getPonta(){
			return $this->ponta;
		}
		public function setPonta($ponta){
			$this->ponta=$ponta;
		}
		public function getCor(){
			return $this->cor;
		}
		public function setCor($cor){
			$this->cor=$cor;
		}
	}	
?>