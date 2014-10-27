<?php
/*
 * Classe Apoio 
 */
class Apoio {
	private $codigo;
	private $nome;
	private $urlImg;
	private $codigoEvento;
	
	public function Apoio($codigo, $nome, $urlImg, $codigoEvendo) {
		$this->codigo   	= $codigo;
		$this->nome     	= $nome;
		$this->urlImg   	= $urlImg;
		$this->codigoEvento = $codigoEvento;
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
	
	public function setUrlImg($newUrlImg) {
		$this->urlImg = $newUrlImg;
	}
	
	public function getUrlImg() {
		return $this->urlImg;
	}
	
	public function setCodigoEvendo($newcodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
}