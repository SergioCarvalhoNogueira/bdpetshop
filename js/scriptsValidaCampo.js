function mascararCampoDeData(campo){
	if (campo.value.length == 2){
		campo.value = campo.value + '/';
		return true;
	}
	if (campo.value.length == 5){
		campo.value = campo.value + '/';
		return true;
	}
	return false;
}

function mascararTel(campo){
	if (campo.value.length == 1){
		campo.value =  '(' + campo.value;
		return true;
	}
	if (campo.value.length == 3){
		campo.value = campo.value + ')';
		return true;
	}
	if (campo.value.length == 8){
		campo.value = campo.value + '-';
		return true;
	}
	return false;
}

function mascararCep(campo){
	if (campo.value.length == 2){
		campo.value = campo.value + '.';
		return true;
	}
	if (campo.value.length == 6){
		campo.value = campo.value + '-';
		return true;
	}
	return false;
}

function ehNumero(valor){
	var tipo = /^\d+$/;
	return tipo.test(valor);
}

function ehData(valor){
	var tipo = /^\d{1,2}\/\d{1,2}\/\d{1,4}$/;
	return tipo.test(valor);
}

function ehTel(valor){
	var tipo = /^\(\d{2}\)\d{4}\-\d{4}$/;
	return tipo.test(valor);
}

function ehCep(valor){
	var tipo = /^\d{2}\.\d{3}\-\d{3}$/;
	return tipo.test(valor);
}

function ValidarFormularioCliente(formulario){
	if(formulario.nome.value == ""){
		alert("O nome deve ser preenchido!");
		formulario.nome.focus();
		return;
	} else if (ehNumero (formulario.nome.value)){
		alert("Formato de nome inválido!");
		formulario.nome.value = "";	
		formulario.nome.focus();
		return;
	} else if (formulario.tel.value == ""){
		alert("O telefone deve ser preenchido!");
		formulario.tel.focus();
		return;
	} else if (!ehTel(formulario.tel.value)){
		alert ("Formato de telefone inválido!");
		formulario.tel.value = "";
		formulario.tel.focus();
		return;
	} else if (formulario.cep.value == ""){
		alert("O CEP deve ser preenchido!");
		formulario.cep.focus();
		return;
	} else if (!ehCep(formulario.telefone.value)){
		alert ("Formato de CEP inválido!");
		formulario.cep.value = "";
		formulario.cep.focus();
		return;
	} else if (formulario.nascimento.value == ""){
		alert("A data de nascimento deve ser preenchida!");
		formulario.nascimento.focus();
		return;
	} else if (!ehData(formulario.nascimento.value)){
		alert("Formato de data inválido!");
		formulario.nascimento.value = "";
		formulario.nascimento.focus();
		return;
	}
	formulario.submit();
	
}