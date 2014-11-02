<h1>Adiconar Departamento</h1>
<form action="?rt=departamento/add" method="post">
	<label>Endreco: </label></br>
	<input type="text" name="endereco" id="endereco"/></br>
	<label>Nome</label></br>
	<input type="text" name="nome" id="nome"/></br>
	<label>Codigo</label></br>
	<input type="text" name="codigo" id="codigo"/></br>
	<input type="submit" value="Cadastra"/>
</form>
<?php if (isset($mensagem)) {
	echo $mensagem;
} ?>