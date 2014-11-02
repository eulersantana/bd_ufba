<?php 
	/**
	* 
	*/
	class User
	{
		public $id;

		public $login;

		public $senha;

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
			return "INSERT INTO user (login,senha) value ('Euler','08098098')";
		}
	}

 ?>