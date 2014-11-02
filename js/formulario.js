$(document).ready(function(){
 var max_fields = 10;
 var botao = $('#add_button');
 var formulario = $('#activ');
 var campo = [" <br/> <div style=' width: 27%; margin: 0px auto;'>",
" <div class='cronograma' align='center' style='width:300px;height:430px; border: 1px solid black;text-align:center' >           ",
 "        <br/>",
"          <!-- Text input NOME DA ATIVIDADE-->",
"          <div class='control-group'>",
"            <label class='control-label' for='nomeAtividade'>Nome da Atividade</label>",
"            <div class='controls'>",
"              <input id='nomeAtividade' name='nomeAtividade' type='text' class='input-xlarge'>",
"            </div>",
"          </div>",
"          <br/>",
"          <!--Data-->",
"          <div class='control-group'>",
"            <label class='control-label' for='dataAtividade'>Data </label>",
"            <br/>",
"            <input style='width:150px;height:25px' id='dataAtividade' type='date'>",
"          </div>",
"          <br/>",
"          <!-- Select Basic DEPARAMENTO -->",
"          <div class='control-group'>",
"            <label class='control-label' for='departamento'>Departamento</label>",
"            <div class='controls'>",
"              <select id='departamento' name='departamento' class='input-xlarge'>",
"                <option>Option one</option>",
"                <option>Option two</option>",
"              </select>",
"            </div>",
"          </div>",
"          <br/>",
"          <!-- Select Basic INSTALACAO-->",
"          <div class='control-group'>",
"            <label class='control-label' for='instalacao'>Instalacao</label>",
"            <div class='controls'>",
"              <select id='instalacao' name='instalacao' class='input-xlarge'>",
"                <option>Option one</option>",
"                <option>Option two</option>",
"              </select>",
"            </div>",
"          </div>",
"          <br/>",
"          <!-- Select Basic CAMPUS-->",
"          <div class='control-group'>",
"            <label class='control-label' for='campus'>Campus</label>",
"            <div class='controls'>",
"              <select id='campus' name='campus' class='input-xlarge'>",
"                <option>Option one</option>",
"                <option>Option two</option>",
"              </select>",
"            </div>",
"          </div>",
"<br/>",
"	<input type='button' id='remove_button' value='Remover Atividade'/>",
"</div>",
"</div>"].join('\n'); 
  
 var x =0;

 $(botao).click(function(){
   if(x<max_fields){
      x++;
      $(formulario).append(campo);
	  $('.cronograma').last().hide();
	  $('.cronograma').last().slideDown('slow');//
	  $('.cronograma').last().fadeIn('slow'); 
   }
 });

 $(formulario).on('click','#remove_button', function(){
	$(this).parent('div').slideUp('slow');
	$(this).parent('div').fadeOut('slow',function(){$(this).parent('div').remove();}); 
    x--;
 });
 
});