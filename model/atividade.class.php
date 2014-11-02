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
	static private $tabela = "atividade";
	
	public function add() {
		$sql = "insert into ".self::$tabela."(codigo, titulo, horario,descricao,
					codigoCronograma)
				values ('".$this->codigo."','".$this->titulo."',
						'".$this->horario."','".$this->descricao."',
						'".$this->codigoCronograma."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";
		
		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
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