<?php
/*
 * Classe Evento
 */
class DeptoEvento {
	private $codigoDepto;
	private $codigoEvento;
	
	public function DeptoEvento() {
		$this->codigoDepto  = null;
		$this->codigoEvento = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigoDepartamento char(15),
					codigoEvento char(15)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigoDepartamento, codigoEvento)
				values ('".$this->codigoDepartamento."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function deletar() {
		//$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";
		#faltam um ID para essa classe

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoDepto($newCodigoDepto) {
		$this->codigoDepto = $newCodigoDepto;
	}
	
	public function getCodigoDepto() {
		return $this->codigoDepto;
	}
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
}