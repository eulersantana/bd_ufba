<?php
/*
 * Classe Departamento
 */
class Departamento {
	private $codigo;
	private $nome;
	private $codigoLocalidade;
	static private $tabela = "departamento";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigo, nome, codigoLocalidade)
				values ('".$this->codigo."','".$this->nome."',
					'".$this->codigoLocalidade."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar($campos) {
		$sql = "select ".$campos." from ".self::$tabela;
		
		return $sql;
	}
	
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