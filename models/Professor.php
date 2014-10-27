<?php
/*
 * Classe Professor
 */
class Professor {
	private $codigo;
	private $siape;
	
	public function Professor($codigo, $siape) {
		$this->codigo = $codigo;
		$this->siape  = $siape;
	}
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setSiape($newSiape) {
		$this->siape = $newSiape;
	}
	
	public function getSiape() {
		return $this->siape;
	}
}