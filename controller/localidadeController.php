<?php

Class localidadeController Extends baseController {

	public function index() {
		/*** load the index template ***/
	        $this->registry->template->show('localidade');
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