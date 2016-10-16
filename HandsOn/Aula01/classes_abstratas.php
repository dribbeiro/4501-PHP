<?php

	abstract class AbstractConta{

		public $titular;
		public $saldo = 0;

		public function depositar($valor){

			$this->saldo = $this->saldo + $valor;
			echo "Valor Depositado: ".$this->saldo."<br />";

		}

		public function sacar($valor){

			$this->saldo -= $valor;
			echo $this->saldo;

		}

		public function verSaldo(){

			echo "Saldo Atual: ".$this->saldo."<br />";

		}

		public abstract function mostrarTipoDeConta();

	}

	class ContaPoupanca extends AbstractConta{

		public $juros = 0.5;

		public function calcularJuros(){

			echo "Valor do Juros: ".$this->saldo * $this->juros."<br />";
			$this->saldo = $this->saldo * (1 + $this->juros);

		}

		public function mostrarTipoDeConta(){

			echo "Sou uma ContaPoupanca";

		}

	}

	final class ContaCorrente extends AbstractConta{

		public function mostrarTipoDeConta(){

			echo "<br />Sou uma ContaCorrente";

		}

	}

	class ContaPoupancaPremium extends ContaPoupanca{

		public function mostrarJurosAtual(){
			$this->juros = 1;
			echo "<br />Juros Premium:".$this->juros;
		}

	}

	$conta1 = new ContaPoupanca();
	$conta1->depositar(500);
	$conta1->calcularJuros();
	$conta1->verSaldo();
	$conta1->mostrarTipoDeConta();
	echo "<hr />";
	$conta2 = new ContaCorrente();
	$conta2->mostrarTipoDeConta();
	echo "<hr />";
	$conta3 = new ContaPoupancaPremium();
	$conta3->depositar(1000);
	$conta3->calcularJuros();
	$conta3->verSaldo();
	$conta3->mostrarTipoDeConta();
	$conta3->mostrarJurosAtual();