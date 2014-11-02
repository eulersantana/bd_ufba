<?php 
	/**
	* 
	*/
	class User
	{
		public $id;
		public $login;
		public $senha;
		static private $tabela = "academico";

		public function setLogin($login)
		{
			$this->login = $login;
		}

		public function setSenha($senha)
		{
			$this->senha = $senha;
		}

		public function getLogin()
		{
			return $this->login;
		}
		public function getSenha()
		{
			return $this->senha;
		}
		
		public function add(){
			return "INSERT INTO ".self::$tabela." (login,senha) 
					values ('".$this->login."','".$this->senha."')";
		}
	}

 ?>