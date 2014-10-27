<?php
/*
 * Classe Cronograma 
 */
class Cronograma {
	private $codigo;
	private $data;
	private $codigoEvento;
	
	public function Cronograma($codigo, $data, $codigoEvento) {
		$this->codigo 		= $codigo;
		$this->data   		= $data;
		$this->codigoEvento = $codigoEvento;
	}
	
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