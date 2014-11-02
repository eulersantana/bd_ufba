<?php
/*
 * Classe Professor
 */
class Professor {
	private $codigo;
	private $siape;
	private $senha;
	
	public function Professor() {
		$this->codigo = null;
		$this->siape  = null;
		$this->senha  = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigo char(15),
					siape char(15),
					primary key(siape)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, siape, senha)
				values ('".$this->codigo."','".$this->siape."'
					,'".$this->senha."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__." where siape = '".$this->siape."'";

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