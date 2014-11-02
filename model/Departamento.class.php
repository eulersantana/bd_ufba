<?php
/*
 * Classe Departamento
 */
class Departamento {
	private $codigo;
	private $nome;
	private $codigoLocalidade;
	
	public function Departamento() {
		$this->codigo 			= null;
		$this->nome   			= null;
		$this->codigoLocalidade = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigo char(15),
					nome varchar(50),
					codigoLocalidade char(15),
					primary key(codigo)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, nome, codigoLocalidade)
				values ('".$this->codigo."','".$this->nome."',
					'".$this->codigoLocalidade."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";

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
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
}