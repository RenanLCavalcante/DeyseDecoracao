<?php

	class User
	{
		
		private $id;
		private $nome;
		private $nascimento;
		private $email;

		function __construct(){ }

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNascimento(){
			return $this->nascimento;
		}

		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
	}
?>