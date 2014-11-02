<?php
/*
 * Classe Aluno
 */
class Aluno {
	private $codigo;
	private $matricula;
	private $curso;
	private $senha;
	static private $tabela = "aluno";
	
	public function add() {
		$sql = "insert into ".self::tabela." (codigo, matricula, curso)
		values ('".$this->codigo."', '".$this->matricula."',
		'".$this->curso."', '".$this->senha."')";
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";
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
	
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	
	public function getSenha() {
		return $this->senha;
	}
}