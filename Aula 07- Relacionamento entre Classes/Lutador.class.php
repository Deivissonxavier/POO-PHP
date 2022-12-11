<?php
	class Lutador{
		private $nome;
		private $nacionalidade;
		private $idade, $altura, $peso;
		private $categoria, $vitoria, $derrota, $empate;

		function apresentar(){
			echo "<p>----------------------------------------------------------------------------------------------------</p>";
			echo "<p>CHEGOU A HORA! O lutador ".$this->getNome();
			echo " Veio diretamente de ". $this->getNacionalidade();
			echo " tem ". $this->getIdade(). " anos e pesa ". $this->getPeso(). " kg";
			echo "<br> Ele tem ". $this->getVitoria()." vitorias ";
			echo $this->getDerrota(). " derrotas e ". $this->getEmpate(). " empates";
		}

		function status(){
			echo "<p>----------------------------------------------------------------------------------------------------</p>";
			echo "<p>".$this->getNome()." é peso ". $this->getCategoria();
			echo " e já ganhou ". $this->getVitoria(). " vezes";
			echo " perdeu ".$this->getDerrota()." vezes e ";
			echo " empatou ". $this->getEmpate(). " vezes";
		}

		function ganharLuta(){
			$this->setVitoria($this->getVitoria()+1);
		}

		function perderLuta(){
			$this->setDerrota($this->getDerrota()+1);
		}

		function empatarLuta(){
			$this->setEmpate($this->getEmpate()+1);
		}

		function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitoria = $vi;
			$this->derrota = $de;
			$this->empate = $em;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

		function getNome(){
			return $this->nome;
		}

		function setNacionalidade($nacionalidade){
			$this->nacionalidade = $nacionalidade;
		}

		function getNacionalidade(){
			return $this->nacionalidade;
		}

		function setIdade($idade){
			$this->idade = $idade;
		}

		function getIdade(){
			return $this->idade;
		}

		function setAltura($altura){
			$this->altura = $altura;
		}

		function getAltura(){
			return $this->altura;
		}
		function setPeso($peso){
			$this->peso = $peso;
			$this->setCategoria();
		}
		function getPeso(){
			return $this->peso;
		}

		function setVitoria($vitoria){
			$this->vitoria = $vitoria;
		}
		function getVitoria(){
			return $this->vitoria;
		}
		function setDerrota($derrota){
			$this->derrota = $derrota;
		}
		function getDerrota(){
			return $this->derrota;
		}

		function setEmpate($empate){
			$this->empate = $empate;
		}
		function getEmpate(){
			return $this->empate;
		}
		private function setCategoria(){
			if($this->peso < 52.2){
				$this->categoria = "Invalida!";
			} elseif($this->peso <= 70.3){
				$this->categoria = "Leve";
			} elseif($this->peso <= 83.9){
				$this->categoria = "Médio";
			} elseif($this->peso <=120.2){
				$this->categoria = "Pesado";
			} else{
				$this->categoria = "Invalido";
			}
		}

		function getCategoria(){
			return $this->categoria;
		}


	}
?>