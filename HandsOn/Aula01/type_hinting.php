<?php

	class Usuario{

		public $email;
		public $senha;

		public function verUsuario(){

			echo "E-mail: {$this->email}<br />";
			echo "Senha: {$this->senha}<br />";

		}

	}

	class Conta{

		public $titular;
		public $saldo;

		public function verConta(){

			echo "Titular: {$this->titular}<br />";
			echo "Saldo: {$this->saldo}<br />";

		}

	}

	class CRUD{

		public function cadastrar(Usuario $usuario){

			echo "Cadastrando Novo Usuario.... <hr />";
			echo "<pre>";
			var_dump($usuario);
			echo "<hr />";

		}

		public function deletar(Usuario $usuario){

			echo "Deletando Usuario.... <hr />";
			echo "<pre>";
			var_dump($usuario);
			echo "<hr />";

		}

		public function atualizar(array $usuario){

			echo "Atualizando Usuario.... <hr />";
			echo "<pre>";
			print_r($usuario);
			echo "<hr />";

		}

	}

	$usuario = new Usuario();
	$usuario->email = "email@4linux";
	$usuario->senha = "1234";

	$conta = new Conta();
	$conta->titular = "Titular da conta";
	$conta->saldo = 1000;

	$crud = new CRUD();
	$crud->cadastrar($usuario);
	$crud->deletar($usuario);
	$crud->atualizar(array("email"=>"email@4linux","senha"=>"1234"));