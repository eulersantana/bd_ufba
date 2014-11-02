<?php
/*
 * Classe Localidade
 */
class Localidade {
	private $codigo;
	private $endereco;
	
	public function Localidade() {
		$this->codigo 	= null;
		$this->endereco = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigo char(15),
					endereco varchar(50),
					primary key(codigo)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, endereco)
				values ('".$this->codigo."','".$this->endereco."')";
		
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
	
	public function setEndereco($newEndereco) {
		$this->endereco = $newEndereco;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
}