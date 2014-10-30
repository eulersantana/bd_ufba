<?php
/*
 * Classe Academico
 */
class Academico {
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
	
	//*******************************************************************
	//*******************************************************************
	
	public function inserir() {
		$sql = "insert into academico (codigo, nome, endereco, nascimento,
					telefone, DPTO)
				values ('".$this->codigo."','".$this->nome."',
					'".$this->endereco."','".$this->nascimento."',
					'".$this->telefone."','".$this->codigoDepartamento."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from academico where codigo = '".$this->codigo."'";	
		return $sql;
	}
	
	public function atualizar() {
		
	}
	
	public selecionar() {
		
	}
}