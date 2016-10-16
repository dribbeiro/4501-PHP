<?php
	
	interface FreteStrat{
		public function calcular();
	}

	class FreteNormal implements FreteStrat{
		public function calcular(){
			echo "Frete Normal <hr />";
			return 20;
		}
	}

	class FreteExpresso implements FreteStrat{
		public function calcular(){
			echo "Frete Expresso <hr />";
			return 5;
		}
	}

	class FreteTurbo implements FreteStrat{
		public function calcular(){
			echo "Frete Turbo <hr />";
			return 10;
		}
	}

	class Pedido{

		public $freteStrat;
		public $totalPedido = 0;

		public function calcularTotalPedido(){
			echo "Pedido + Frete: ".$this->totalPedido += $this->freteStrat;

		}

	}

	$tipoFrete = 'Normal';

	switch($tipoFrete){
		case 'Normal':
			$objFrete = new FreteNormal();
			break;
		case 'Expresso':
			$objFrete = new FreteExpresso();
			break;
		case 'Turbo':
			$objFrete = new FreteTurbo();
			break;
		default:
			echo 'Frete Inexistente';
		break;
	}

	$pedido1 = new Pedido();
	$pedido1->totalPedido = 100;
	$pedido1->freteStrat =$objFrete->calcular();
	$pedido1->calcularTotalPedido();

	$pedido2 = new Pedido();
	$pedido2->totalPedido = 200;
	$pedido2->freteStrat =$objFrete->calcular();
	$pedido2->calcularTotalPedido();

	$pedido3 = new Pedido();
	$pedido3->totalPedido = 300;
	$pedido3->freteStrat =$objFrete->calcular();
	$pedido3->calcularTotalPedido();