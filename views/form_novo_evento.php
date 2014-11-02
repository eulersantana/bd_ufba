<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		
		
		<script type="text/javascript">
			function add_atividade() {
				if(confirm("Você irá adicionar uma nova atividade. Continuar?")) {
					var form_atividades  = document.getElementById("form_atividades");
					var novas_atividades = document.getElementById("novas_atividades");
	
					novas_atividades.innerHTML += form_atividades.innerHTML;
				}
			}
		</script>
		
		<style type="text/css">
			label {
				display: block;
				width: 180px;
				float: left;
				font-weight: bold;
				font-size: 15px;
			}
			input {
				width: 190px;
			}
			select {
				width: 195px;
			}
			textarea {
				min-width: 190px;
				width: 190px;
				max-width: 190px;
			}
		</style>
	</head>
	<body>
		<h1> <?php echo $titulo; ?> </h1>
		<div id="form_novo_evento">
			<form method="post" enctype="multipart/form-data" action="?rt=evento/add">
				<fieldset>
					<label>Nome do evento</label>
					<input type="text" name="titulo_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Cartaz</label>
					<input type="file" name="cartaz_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Data de inicio</label>
					<input type="date" name="data_inicio_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Date de termino</label>
					<input type="date" name="data_fim_evento"/>
				</fieldset>
				
				<fieldset>
					<label>Descrição</label>
					<textarea name="descricao_evento"></textarea>
				</fieldset>
				
				
				<!-- 
				  --
				  -- FORMULARIO DE ATIVIDADES
				  --
				  -->
				
				<h2>Atividades</h2>
				
				<div id="data_atividade">
					<div id="form_atividades">
						<hr/>
						
						<fieldset>
							<label>Data da atividade</label>
							<input type="date" name="data_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Titulo da atividade</label>
							<input type="text" name="titulo_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Titulo da atividade</label>
							<input type="time" name="horario_atividade[]"/>
						</fieldset>
						
						<fieldset>
							<label>Descrição da atividade</label>
							<textarea name="descricao_atividade[]"></textarea>
						</fieldset>
					
						<hr/>
					</div>
					
					<div id="novas_atividades"></div>
				</div>
				
				<input type="button" value="adicionar atividade" onclick="add_atividade();"/>
				<input type="submit" value="Cadastrar Evento"/>
			</form>
		</div>
	</body>
</html>
