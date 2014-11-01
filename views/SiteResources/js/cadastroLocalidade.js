$(document).ready(function(){
	var novoCampus = $('#novoCampus');
	var acaonovoCampus = $('#acaonovoCampus');
	var novaInstalacao = $('#novaInstalacao');
	var acaonovaInstalacao = $('#acaonovaInstalacao');
	
	
	acaonovaInstalacao.hide();
	acaonovoCampus.hide();

	novoCampus.click(function() {
		novaInstalacao.attr("checked",false);
		//document.getElementById("userAluno").checked = false;
		if(this.checked) {
			acaonovoCampus.show();
			acaonovaInstalacao.hide();
		} else {
			acaonovoCampus.hide();
		}
	});

	novaInstalacao.click(function() {
		acaonovoCampus.attr("checked",false);
		//document.getElementById("userProfessor").checked = false;
		if(this.checked) {
			acaonovaInstalacao.show();
			acaonovoCampus.hide();
		} else {
			acaonovaInstalacao.hide();
		}
	});

});