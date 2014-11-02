<?php
/*
 * Classe Campus
 */
class Campus {
	private $codigoLocalidade;
	private $nome;
	
	public function Instalacao() {
		$this->codigoLocalidade = null;
		$this->nome 			= null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					nome varchar(50),
					codigoLocalidade char(15),
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__."(codigoLocalidade, nome)
				values ('".$this->codigoLocalidade."','".$this->nome."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__"
				where codigoLocalidade = '".$this->codigoLocalidade."' and
					nome = '".$this->nome."'";
		
		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*******************************************************************
	//*******************************************************************
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
}