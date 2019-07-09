//alert("Ola mundo");

function valida() {
	var nome = document.getElementById('nome');
	if (nome.value == "") {
		alert("Nome nao pode estar vazio");
	}else{
		alert("Bem vindo " + nome.value);
	}
}