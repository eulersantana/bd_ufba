<?php

Class indexController Extends baseController {

	public function index() {
		$departamento = new Departamento;
		
		try {
			$consulta = Executable::EXECUTE_QUERY_GET_OBJ_PDO(db::getInstance(), 
										 $departamento->selecionar("id, nome"));
			
			$this->registry->template->departamentos = $consulta;
		} catch (PDOException $e) {
			print "Error! <b>" . $e->getMessage() . "<b/></br>";
		}

		$campus = new Campus;
		//----------------------------------------------------//
		$query  = $campus->selecionar("codigo,nome");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }
		 $this->registry->template->campus = $val;
		//----------------------------------------------------//
		 $campus = new Departamento;
		$instalacao = new Instalacao;

		$query  = $instalacao->selecionar("localidade_id,predio");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }

		$this->registry->template->instalacoes = $val;
		//----------------------------------------------------//
		// ---------------------------------------------------//
		$eventos = new Evento;
		$list = [];

		$query  = $eventos->selecionaTodos();
		foreach (db::getInstance()->query($query) as $val) {
			 	array_push($list, $val);
		}

		$this->registry->template->listaEventos = $list;
		// ---------------------------------------------------//

		$this->registry->template->show('index');
	}

	public function blog()
	{
		# code...
	}


	public function add()
	{
		if(isset($_POST['cadastrar_novo_usuario']) && (stristr($_POST['cadastrar_novo_usuario'],"cadastrar"))) {
			$academico = new Academico;
			
			$data2 = $_POST['data_nascimento'];
			$data2 = explode("/", $data2);
			
			// verifica se eh um professor ou aluno
			if (stristr($_POST['tipo_usuario'], "professor"))
				$professor = new Professor;
			if (stristr($_POST['tipo_usuario'], "aluno"))
				$aluno = new Aluno;
			
			$academico->setNome($_POST['nome_completo']);
			$academico->setEndereco($_POST['endereco']);
			$academico->setDataNascimento($data2[0]);
			$academico->setTelefone($_POST['telefone']);
			$academico->setCodigoDepartamento($_POST['departamento']);
			$academico->setEmail($_POST['email']);
			
			try {
				$id = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $academico->inserir());
				
				$this->registry->template->mensagem = "Ultimo id: ".$id;
				
				if(isset($professor)) {
					$professor->setSiape($_POST['identificador']);
					$professor->setSenha($_POST['senha']);
					$professor->setAcademicoId($id);
					
					Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $professor->inserir());
					
				} else if(isset($aluno)) {
					$aluno->setMatricula($_POST['identificador']);
					$aluno->setCurso($_POST['curso']);
					$aluno->setSenha($_POST['senha']);
					$aluno->setAcademicoId($id);
					
					Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $aluno->inserir());
				}
				
			}catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "</br>";
			}
			
		} else {
			$this->registry->template->mensagem = "form ERROR 1";
		}
		
		$this->registry->template->show('index');
	}
}

?>
