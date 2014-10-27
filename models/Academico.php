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
	
	public function Academico($codigo, $nome, $endereco, $dataNascimento,
							  $telefone, $codigoDepartamento) {
		$this->codigo 			  = $codigo;
		$this->nome   			  = $nome;
		$this->endereco 		  = $endereco;
		$this->dataNascimento 	  = $dataNascimento;
		$this->telefone 		  = $telefone;
		$this->codigoDepartamento = $dataDepartamento;
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
}