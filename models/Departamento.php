<?php
/*
 * Classe Departamento
 */
class Departamento {
	private $codigo;
	private $nome;
	private $codigoLocalidade;
	
	public function Departamento($codigo, $nome, $codigoLocalidade) {
		$this->codigo 			= $codigo;
		$this->nome   			= $nome;
		$this->codigoLocalidade = $codigoLocalidade;
	}
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
}