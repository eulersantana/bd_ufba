<?php
/*
 * 
 */
class LocalidadeEvento {
	private $codigoEvento;
	private $codigoLocalidade;
	
	public function LocalidadeEvento($localidade, $evento) {
		$this->localidade = $localidade;
		$this->evento 	  = $evento;
	}
	
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