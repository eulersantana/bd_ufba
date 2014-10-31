$(document).ready(function(){
 var max_fields = 10;
 var botao = $('#add_button');
 var formulario = $('#activ');
 var campo = ["<p></p>",
				"<form id='activ'>",
					"<fieldset>",
						"<div class='cronograma' style='width 194px; padding:12px; border: 1px solid black;text-align:left'>", 
							"<div class='control-group'>",
								"<label class='control-label' for='nomeAtividade'>Nome da Atividade</label>",
								"<div class='controls'>",
									"<input id='nomeAtividade' name='nomeAtividade' type='text'  >",
								"</div>",
							"</div>",
							"<div class='control-group'>",
								"<label class='control-label' for='dataAtividade'>Data </label>",
								"<div class='controls'>",
									"<input id='dataAtividade' type='date'>",
								"</div>",
							"</div>",
							"<div class='control-group'>",
								"<label class='control-label' for='horaAtividade'>Hora </label>",
								"<div class='controls'>",
									"<input type='time' id='horaAtividade' >",
								"<div>",
							"</div>",
							"<div class='control-group'>",
								"<label class='control-label' for='descricaoAtividade'>Descrição</label>",
								"<div class='controls'>",
									"<textarea id='descricaoAtividade' name='descricaoAtividade'></textarea>",
								"</div>",
							"</div>",
							"<div >",
								"<label  for='buttonLocalidade'>Localidade</label>",
								"<div class='controls'>",
									"<select>",
										"<option value='volvo'>Volvo</option>",
									"</select>",
									"<div >",
										"<label  for='buttonLocalidade'>Departamento</label>",
										"<div class='controls'>",
											"<select>",
												"<option value='volvo'>Volvo</option>",
											"</select>",
											"<p></p>",
											"<p><input type='button' id='remove_button' value='Remover Atividade'/></p>",
										"</div>",
									"</div>",
								"</div>",
							"</div>",
					"</fieldset>",
				"</form>",

		"<p></p>"].join('\n'); 
  
 var x =0;

 $(botao).click(function(){
   if(x<max_fields){
      x++;
      $(formulario).append(campo);
	  $('.cronograma').last().hide();
	  $('.cronograma').last().slideDown("slow");//
	  $('.cronograma').last().fadeIn("slow"); 
   }
 });

 $(formulario).on('click','#remove_button', function(){
	$(this).parents('.cronograma').slideUp("slow");
	$(this).parents('.cronograma').fadeOut("slow",function(){$(this).parents('.cronograma').remove();}); 
    x--;
 });
				
 
});