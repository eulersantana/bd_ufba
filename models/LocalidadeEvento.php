<?php
/*
 * 
 */
class LocalidadeEvento {
	private $codigoEvento;
	private $codigoLocalidade;
	
	public function LocalidadeEvento() {
		$this->codigoLocalidade = null;
		$this->codigoEvento	    = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigoLocalidade char(15),
					codigoEvento char(15),
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigoLocalidade, codigoEvento)
				values ('".$this->codigoLocalidade."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__." 
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