<?php
/*
 * Classe Instalacao
 */
class Instalacao {
	private $codigoLocalidade;
	private $predio;
	static private $tabela = "instalacao";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigoLocalidade, predio)
				values ('".$this->codigoLocalidade."','".$this->predio."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela."
				where codigoLocalidade = '".$this->codigoLocalidade."' and
					predio = '".$this->predio."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
	
	public function setPredio($newPredio) {
		$this->predio = $newPredio;
	}
	
	public function getPredio() {
		return $this->predio;
	}
}