<?php

	interface InterfaceTV{

		public function aumentarVolume();
		public function abaixarVolume();
		public function proximoCanal();
		public function ligar();
		public function desligar();

	}

	class TV implements InterfaceTV{

		public $volume = 10;
		public $canal  = 5;
		public $status = 'OFF';

		public function aumentarVolume(){
			++$this->volume;
			echo "Volume aumentado para: {$this->volume}<hr />";
		}

		public function abaixarVolume(){
			--$this->volume;
			echo "Volume abaixado para: {$this->volume}<hr />";
		}

		public function proximoCanal(){
			++$this->canal;
			echo "Canal mudado para: {$this->canal}<hr />";
		}

		public function ligar(){
			$this->status = 'ON';
			echo "TV: {$this->status}<hr />";
		}

		public function desligar(){
			$this->status = 'OFF';
			echo "TV: {$this->status}";
		}

	}

	$tv = new TV();
	$tv->aumentarVolume();
	$tv->abaixarVolume();
	$tv->proximoCanal();
	$tv->ligar();
	$tv->desligar();