<?php
/*
 * Classe Localidade
 */
class Localidade {
	private $codigo;
	private $endereco;
	
	public function Localidade($codigo, $endereco) {
		$this->codigo 	= $codigo;
		$this->endereco = $endereco;
	}
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setEndereco($newEndereco) {
		$this->endereco = $newEndereco;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
}