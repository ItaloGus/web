<div align="center">
<?php
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
if ("$usuario" == 'admin' and "$senha" == 'admin'){
	header("Location: tela_2_opcao.php");
}
else{
	echo "<h1>Usuario ou Senha inválidos!</h1>";
	print("<h3><a href=\"tela_1_inicio.php\">Voltar ao menu de login!</a></h3>");
}?>
</div>