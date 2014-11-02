<?php
/*
 * Classe Campus
 */
class Campus {
	private $codigoLocalidade;
	private $nome;
	static private $tabela = "campus";
	
	public function add() {
		$sql = "insert into ".self::$tabela."(codigoLocalidade, nome)
				values ('".$this->codigoLocalidade."','".$this->nome."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela."
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