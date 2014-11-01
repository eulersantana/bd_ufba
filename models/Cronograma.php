<?php
/*
 * Classe Cronograma 
 */
class Cronograma {
	private $codigo;
	private $data;
	private $codigoEvento;
	
	public function Cronograma() {
		$this->codigo 		= null;
		$this->data   		= null;
		$this->codigoEvento = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__."(
					codigo char(15),
					data date,
					codigoEvento char(15),
					primary key(codigo)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, data, codigoEvento)
				values ('".$this->codigo."','".$this->data."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setData($newData) {
		$this->data = $newData;
	}
	
	public function getData() {
		return $this->data;
	}
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
}