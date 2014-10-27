<?php
/*
 * Classe Evento
 */
class Evento {
	private $codigo;
	private $titulo;
	private $cartaz;
	private $inicio;
	private $fim;
	private $descricao;
	private $codigoResponsavel;
	
	public function Evento($codigo, $titulo, $cartaz, $inicio, $fim, $descricao,
						   $codigoResponsavel) {
		$this->codigo 			 = $codigo;
		$this->titulo 			 = $titulo;
		$this->cartaz 			 = $cartaz;
		$this->inicio 			 = $inicio;
		$this->fim	  			 = $fim;
		$this->descricao 		 = $descricao;
		$this->codigoResponsavel = $codigoResponsavel;
	}
	
	public function setId($newId) {
		$this->id = $newId;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setTitulo($newTitulo) {
		$this->titulo = $newTitulo;
	}
	
	public function getTitulo() {
		return $this->Titulo;
	}
	
	public function setCartaz($newCartaz) {
		$this->cartaz = $newCartaz;
	}
	
	public function getCartaz() {
		return $this->cartaz;
	}
	
	public function setInicio($newInicio) {
		$this->inicio = $newInicio;
	}
	
	public function getInicio() {
		return $this->inicio;
	}
	
	public function setFim($newFim) {
		$this->id = $newFim;
	}
	
	public function getFim() {
		return $this->fim;
	}
	
	public function setDescricao($newDescricao) {
		$this->descricao = $newDescricao;
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setCodigoResponsavel($newCodigoResponsavel) {
		$this->codigoResponsavel = $newCodigoResponsavel;
	}
	
	public function getResponsavel() {
		return $this->responsavel;
	}
}