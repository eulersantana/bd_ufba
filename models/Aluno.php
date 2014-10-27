<?php
/*
 * Classe Aluno
 */
class Aluno {
	private $codigo;
	private $matricula;
	private $curso;
	
	public function Aluno($codigo, $matricula, $curso) {
		$this->codigo 	 = $codigo;
		$this->matricula = $matricula;
		$this->curso 	 = $curso;
	}
	
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