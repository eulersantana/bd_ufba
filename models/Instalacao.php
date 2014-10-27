<?php
/*
 * Classe Instalacao
 */
class Instalacao {
	private $codigoLocalidade;
	private $predio;
	
	public function Instalacao($codigoLocalidade, $predio) {
		$this->codigoLocalidade = $codigoLocalidade;
		$this->predio 			= $predio;
	}
	
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