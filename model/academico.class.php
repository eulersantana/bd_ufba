<?php
/*
 * Classe Academico
 */cclass Academico {
	private $codigo;
	private $nome;
	private $endereco;
	private $dataNacimento;
	private $telefone;
	private $codigoDepartamento;
	
	public function Academico() {
		$this->codigo 			  = null;
		$this->nome   			  = null;
		$this->endereco 		  = null;
		$this->dataNascimento 	  = null;
		$this->telefone 		  = null;
		$this->codigoDepartamento = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__." (
		codigo char(15) not null,
		nome varchar(50),
		endereco varchar(100),
		nascimento date,
		telefone varchar(10),
		DPTO char(10),
		primary key(codigo)
		)";
	
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, nome, endereco, nascimento,
		telefone, DPTO)
		values ('".$this->codigo."','".$this->nome."',
		'".$this->endereco."','".$this->nascimento."',
		'".$this->telefone."','".$this->codigoDepartamento."')";
	
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";
		return $sql;
	}
	
	public function atualizar() { }
	
	public selecionar() { }
	
	//*******************************************************************
	//*******************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setNome($NewNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setEndereco($newEndereco) {
		$this->endereco = $newEndereco;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function setDataNascimento($newDataNascimento) {
		$this->dataNascimento = $newDataNascimento;
	}
	
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	
	public function setTelefone($newTelefone) {
		$this->telefone = $newTelefone;
	}
	
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function setCodigoDepartamento($newCodigoDepartamento) {
		$this->codigoDepartamento = $newCodigoDapartamento;
	}
	
	public function getCodigoDepartamento() {
		return $this->codigoDepartamento;
	}
}