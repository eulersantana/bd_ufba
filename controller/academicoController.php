<?php

Class academicoController Extends baseController {

	public function index() {
		$departamento = new Departamento;
		
		$query = $departamento->selecionar("id, nome");
		
		try {
			$instancia = db::getInstance();
			
			try {
				$consulta = $instancia->query($query);
				$this->registry->template->departamentos = $consulta;
			} catch (PDOException $e) {
				print "Error! <b>" . $e->getMessage() . "<b/></br>";
			}
		} catch (PDOException $e) {
			print "Error! <b>" . $e->getMessage() . "<b/></br>";
		}
		
		$this->registry->template->titulo = "Registrar novo Academico";
		$this->registry->template->show('form_novo_usuario');
	}

	public function add()
	{
		if(isset($_POST['cadastrar_novo_usuario']) && (stristr($_POST['cadastrar_novo_usuario'],"cadastrar"))) {
			$academico = new Academico;
			
			$data2 = $_POST['data_nascimento'];
			$data2 = explode("/", $data2);
			
			// verifica se eh um professor ou aluno
			if (stristr($_POST['tipo_usuario'], "professor"))
				$professor = new Prodessor;
			if (stristr($_POST['tipo_usuario'], "aluno"))
				$aluno = new Aluno;
			
			$academico->setNome($_POST['nome_completo']);
			$academico->setEndereco($_POST['endereco']);
			$academico->setDataNascimento($data2[0]);
			$academico->setTelefone($_POST['telefone']);
			$academico->setCodigoDepartamento($_POST['departamento']);
			$academico->setEmail($_POST['email']);
			
			if(isset($professor)) {
				$professor->setSiape($_POST['identificador']);
				$professor->setSenha($_POST['senha']);
			} else if(isset($aluno)) {
				$aluno->setMatricula($_POST['identificador']);
				$aluno->setCurso($_POST['curso']);
				$aluno->setSenha($_POST['senha']);
			}
			
			try {
				$query = $academico->add();
				$instancia = db::getInstance();
				
				try {
					//$instancia->exec($query);
					$this->registry->template->mensagem = "Ultimo id:".Executable::EXECUTE_QUERY_GET_ID($instancia, $query);
				} catch( PDOExecption $e ) {
				    print "Error!: " . $e->getMessage() . "</br>";
				}
			}catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "</br>";
			}
			
		} else {
			$this->registry->template->mensagem = "form ERROR 1";
		}
		
		$this->registry->template->show('form_novo_usuario');
	}
}

?>