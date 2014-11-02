<?php
/*
 * Classe Aluno
 */
class Aluno {
	private $codigo;
	private $matricula;
	private $curso;
	
	public function Aluno() {
		$this->codigo 	 = null;
		$this->matricula = null;
		$this->curso 	 = null;
	}
	
	public function createTable() {
		$sql = "create table ".__CLASS__." (
					codigo char(10),
					matricula char(15),
					curso varchar(30)
					primary key(matricula)
				)";
	
		return $sql;
	}
	
	public function inserir() {
		$sql = "insert into ".__CLASS__." (codigo, matricula, curso)
		values ('".$this->codigo."', '".$this->matricula."',
		'".$this->curso."')";
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";
	}
	
	//*******************************************************************
	//*******************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setMatricula($newMatricula) {
		$this->matricula = $newMatricula;
	}
	
	public function getMatricula() {
		return $this->matricula;
	}
	
	public function setCurso($newCurso) {
		$this->curso = $newCurso;
	}
	
	public function getCurso() {
		return $this->curso;
	}
}