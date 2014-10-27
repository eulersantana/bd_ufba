<?php
/*
 * Classe Campus
 */
class Campus {
	private $codigoLocalidade;
	private $nome;
	
	public function Instalacao($codigoLocalidade, nome) {
		$this->codigoLocalidade = $codigoLocalidade;
		$this->nome 			= $nome;
	}
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
}