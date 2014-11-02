<?php

Class eventoController Extends baseController {

	public function index() {
		$this->registry->template->titulo = "Cadastrar novo evento";
		$this->registry->template->show('form_novo_evento');
	}

	public function add()
	{
		$evento 	= new Evento;
		$atividade  = new Atividade;
		
		$data_inicio_evento = explode("/", $_POST['data_inicio_evento']);
		$data_fim_evento    = explode("/", $_POST['data_fim_evento']);
		
		##################################
		
		$evento->setTitulo($_POST['titulo_evento']);
		$evento->setCartaz($_FILES['cartaz_evento']['name']);
		$evento->setInicio($data_inicio_evento[0]);
		$evento->setFim($data_fim_evento[0]);
		$evento->setDescricao($_POST['descricao_evento']);
		$evento->setAcademicoId(1);
		
		try {
			##################################
			
			# insere os eventos na base
			$id_evento = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $evento->add());
			
			for($i = 0; $i < sizeof($_POST['titulo_atividade']); $i++) {
				$atividade->setTitulo($_POST['titulo_atividade'][$i]);
				$atividade->setData($_POST['data_data'][$i]);
				$atividade->setHorario($_POST['horario_atividade'][$i]);
				$atividade->setDescricao($_POST['descricao_atividade'][$i]);
				$atividade->setCodigoEvento($id_evento);
				
				try {
				// insere as atividades na base
				Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $atividade->add());
				} catch(PDOException $e) {
					print "Erro ".$e->getMessage()."<br/>";
				}
			}
			
		} catch(PDOException $e) {
			print "Erro ".$e->getMessage()."<br/>";
		}
		$this->registry->template->show('form_novo_evento');
	}
}

?>