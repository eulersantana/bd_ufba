<?php
/*
 * Classe Cronograma 
 */
class Cronograma {
	private $codigo;
	private $data;
	private $codigoEvento;
	static private $tabela = "cronograma";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigo, data, codigoEvento)
				values ('".$this->codigo."','".$this->data."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";

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