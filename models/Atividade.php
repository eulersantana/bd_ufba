<?php
/*
 * Classe Atividade
 */
class Atividade {
	private $codigo;
	private $titulo;
	private $horario;
	private $descricao;
	private $codigoCronograma;
	
	public function Atividade($codigo, $titulo, $horario, $descricao,
							  $codigoCronograma) {
		$this->codigo 			= $codigo;
		$this->titulo 			= $titulo;
		$this->horario 			= $horario;
		$this->descricao 		= $descricao;
		$this->codigoCronograma = $codigoCronograma;
	}
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setTitulo($newTitulo) {
		$this->titulo = $newTitulo;
	}
	
	public function getTitulo() {
		return $this->titulo;
	}
	
	public function setHorario($newHorario) {
		$this->horario = $horario;
	}
	
	public function getHorario() {
		return $this->horario;
	}
	
	public function setDescricao($newDescricao) {
		$this->descricao = $newDescricao;
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setCodigoCronograma($newCodigoCronograma) {
		$this->codigoCronograma = $newCodigoCronograma;
	}
	
	public function getCodigoCronograma() {
		return $this->codigoCronograma;
	}
}