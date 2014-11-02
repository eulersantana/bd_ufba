<?php

Class eventoController Extends baseController {

	public function index() {
		/*** set a template variable ***/
	        $this->registry->template->welcome = 'Todos os eventos';
	        /*** set a template variable ***/
	        $this->registry->template->vida = 'Todos os eventos';
		/*** load the index template ***/
	        $this->registry->template->show('evento');
	}

	public function nome()
	{
		/*** set a template variable ***/
		if (isset($_POST['nome'])) {
			# code...
	        $this->registry->template->nome= $_POST['nome'];
		}else{
	        $this->registry->template->nome= 'Nao tinha nome';
		}
		/*** load the index template ***/
	        $this->registry->template->show('evento');
	}
}

?>