<?php
/*
 * Classe Instalacao
 */
class Instalacao {
	private $codigoLocalidade;
	private $predio;
	
	public function Instalacao() {
		$this->codigoLocalidade = null;
		$this->predio 			= null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigoLocalidade char(15),
					predio varchar(50)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigoLocalidade, predio)
				values ('".$this->codigoLocalidade."','".$this->predio."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__."
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