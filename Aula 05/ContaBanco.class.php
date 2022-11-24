<pre>
<?php
	class ContaBanco{
		///atributos
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;
		///metodos
		public function abrirConta($t){
			$this->setTipo($t);
			$this->setStatus(true);
			if($t == "CC"){
				$this->setSaldo(50);
			} elseif($t == "CP"){
				$this->setSaldo(150);
			}
		}

		public function fecharConta(){
			if($this->getSaldo() > 0){
				echo "<p>Conta ainda tem dinheiro, não posso fecha-la</p>";
			} elseif($this->getStatus() < 0){
				echo "<p>Conta está em debito. impossivel encerrar</p>";
			} else{
				$this->setStatus(false);
				echo "<p>Conta de ".$this->getDono()." Fechada com sucesso!</p>";
			}
		}

		public function depositar($v){
			if($this->getStatus()){
				$this->setSaldo($this->getSaldo() + $v);
				echo "Deposito de $v na conta de ".$this->getDono()."</p>";
			} else{
				echo "Conta fechada. não consigo depositar";
			}

		}

		public function sacar($v){
			if($this->getStatus()){
				if($this->getSaldo() >= $v){
					$this->setSaldo($this->getSaldo() - $v);
					echo "Saque de $v autorizado na conta de ". $this->getDono()."</p>";
				} else{
					echo "Saldo insuficiente para saque";
				}
			} else{
				echo "<p>Não posso sacar de uma conta fechada<p/>";
			}
		}

		public function pagarMensal(){
			if($this->getTipo() == "CC"){
				$v = 12;
			} elseif($this->getTipo() == "CP"){
				$v = 20;
			}
			if($this->getStatus()){
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Mensalidade de R$ $v debitada na conta de ".$this->getDono()."</p>";
			} else{
				echo "Problemas com a conta, não posso cobrar";
			}
		}
		///metodos especiais
		public function __construct(){
			$this->setSaldo(0);
			$this->setStatus(false);
			echo "<p>Conta criada com sucesso</p>";
		}
		public function setNumConta($n){
			$this->numConta=$n;
		}
		public function getNumConta(){
			return $this->numConta;
		}
		
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function getTipo(){
			return $this->tipo;
		}

		
		public function setDono($dono){
			$this->dono=$dono;
		}
		
		public function getDono(){
			return $this->dono;
		}

		public function setSaldo($saldo){
			$this->saldo=$saldo;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setStatus($status){
			$this->status=$status;
		}


		public function getStatus(){
			return $this->status;
		}

		
	}

?>
<pre/>