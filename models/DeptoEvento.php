<?php
/*
 * Classe Evento
 */
class DeptoEvento {
	private $codigoDepto;
	private $codigoEvento;
	
	public function DeptoEvento($codigoDepto, $codigoEvento) {
		$this->codigoDepto  = $codigoDepto;
		$this->codigoEvento = $codigoEvento;
	}
	
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