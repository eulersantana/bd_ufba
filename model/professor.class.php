<?php
/*
 * Classe Professor
 */
class Professor {
	private $codigo;
	private $siape;
	private $senha;
	static private $tabela = "professor";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigo, siape, senha)
				values ('".$this->codigo."','".$this->siape."'
					,'".$this->senha."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".self::$tabela." where siape = '".$this->siape."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setSiape($newSiape) {
		$this->siape = $newSiape;
	}
	
	public function getSiape() {
		return $this->siape;
	}
	
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	
	public function getSenha() {
		return $this->senha;
	}
}