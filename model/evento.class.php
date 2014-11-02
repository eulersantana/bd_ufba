<?php

class Evento {
    private $id;
    private $titulo;
    private $cartaz;
    private $inicio;
    private $fim;
    private $descricao;
    private $academico_id;
    private static $tabela;
    
    public function add() {
        $sql = "insert into ".self::$tabela." (titulo, cartaz, inicio, fim,"
                . "descricao) values ('".$this->titulo."', '".$this->cartaz."',"
                . "'".$this->inicio."', '".$this->fim."', '".$this->descricao."',"
                . "'".$this->academico_id."')";
        
        return $sql;
    }
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCartaz() {
        return $this->cartaz;
    }

    function getInicio() {
        return $this->inicio;
    }

    function getFim() {
        return $this->fim;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getAcademico_id() {
        return $this->academico_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCartaz($cartaz) {
        $this->cartaz = $cartaz;
    }

    function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    function setFim($fim) {
        $this->fim = $fim;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setAcademico_id($academico_id) {
        $this->academico_id = $academico_id;
    }
}
