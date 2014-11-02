<?php

Class eventoController Extends baseController {

	public function index() {
		$this->registry->template->titulo = "Cadastrar novo evento";
		$this->registry->template->show('form_novo_evento');
	}

	public function add()
	{
		$evento = new Evento;
		$atividade = new Atividade;
		
		$this->registry->template->show('form_novo_evento');
	}
}

?>