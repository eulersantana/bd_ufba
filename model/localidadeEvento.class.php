<?php
/*
 * 
 */
class LocalidadeEvento {
	private $codigoEvento;
	private $codigoLocalidade;
	static private $tabela = "localidade_has_evento";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigoLocalidade, codigoEvento)
				values ('".$this->codigoLocalidade."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." 
				where codigoLocalidade = '".$this->codigoLocalidade."' and
					codigoEvento = '".$this->codigoEvento."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
}