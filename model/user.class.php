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

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getLogin()
		{
			return $this->login;
		}
		public function getSenha()
		{
			return $this->senha;
		}

		public function getId()
		{
			return $this->id;
		}
		
		public function inserir()
		{
			return "INSERT INTO ".self::$tabela." (login,senha) 
					values ('".$this->login."','".$this->senha."')";
		}

		public function selecionar($ampos)
		{
			return "select ".$campos." from ".self::$tabela;
		}

		public function selecionarUser($condicao)
		{
			return "select * from ".self::$tabela." where ".$condicao;
		}
	}

 ?>