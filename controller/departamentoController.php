<?php

Class departmentoController Extends baseController {

	public function index() {
		$campus = new Departamento;

		$query  = $campus->selecionar("codigo,nome");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }
		 $this->registry->template-> = $val;
	    $this->registry->template->show('departamento');
	}

	public function add()
	{	
		$localidade = new Localidade;
		$instalacao = new Instalacao;

		/*** set a template variable ***/
		if (isset($_POST['endereco'])) {
			# code...
			$localidade->setEndereco($_POST['endereco']);

			$query = $localidade->inserir();

			$id_localidade = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(),$query);

			if (isset($id_localidade)) {
	        	if (isset($_POST['instalacao'])) {
	        		$instalacao->setPredio($_POST['instalacao']);
	        		$instalacao->setCodigoCampus($_POST['campus']);
	        		$instalacao->setCodigoLocalidade($id_localidade);
	        		$query = $instalacao->inserir();

	        		Executable::EXECUTE_QUERY_GET_OBJ_PDO(db::getInstance(),$query);
	        		
	        	}
	        	$this->registry->template->mensagem = "Cadastrado com sucesso.";
				
			}else{
	        	$this->registry->template->mensagem = "Erro no cadastro";

			}
		
	    }
	    $this->registry->template->show('campus');

	}
}