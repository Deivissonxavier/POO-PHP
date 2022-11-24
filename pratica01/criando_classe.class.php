<?php
	class Caneta{
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		function rabiscar(){
			if ($this->tanpada == true){
				echo "A caneta está fechada!";
			} else{
				echo "estou rabiscando...";
			}

		}

		function tampar(){
			$this->tanpada = true;
		}

		function destanpar(){
			$this->tanpada = false;
		}
	}
?>