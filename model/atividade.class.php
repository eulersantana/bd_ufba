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
	
	public function Atividade() {
		$this->codigo 			= null;
		$this->titulo 			= null;
		$this->horario 			= null;
		$this->descricao 		= null;
		$this->codigoCronograma = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__." (
					codigo varchar(15),
					titulo char(30),
					horario time,
					descricao longtext,
					codigoCronograma,
					primary key(codigo)
				)";
		
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__."(codigo, titulo, horario,descricao,
					codigoCronograma)
				values ('".$this->codigo."','".$this->titulo."',
						'".$this->horario."','".$this->descricao."',
						'".$this->codigoCronograma."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";
		
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