<?php
include('../model/Banco.class.php');
/*
 * Classe MySQL (padrão: SINGLETON)
 */
class MySQL extends Banco {
    private static $_instancia = null;
    
    private function __construct() { }
    private function __clone() { }
    
    public static function getInstancia() {
        if (!self::$_instancia) {
            self::$_instancia = new self;
        }
        
        return self::$_instancia;
    }
    
    public function conectar() {
        if (!$this->isConectado()) {
            $this->objImplSQL = null;
            $this->conectado = mysql_connect($this->servidor, $this->usuario,
                                             $this->senha);
            $this->baseSelecionada = mysql_select_db($this->nomeBase,
                                                     $this->conectado);
        }
        
        return ($this->conectado && $this->baseSelecionada);
    }
    
    public function desconectar() {
        if ($this->isConectado()) {
            mysql_close($this->conectado);
            unset($this->conectado, $this->baseSelecionada);
        }
    }
    
    public function isConectado() {
        return (self::$_instancia && $this->conectado && $this->baseSelecionada);
    }
}
