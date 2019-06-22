<?php
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
if ("$usuario" == 'admin' and "$senha" == 'admin'){
	header("Location: tela_2_opcao.php");
}
else{
	header("Location: tela_1_inicio.php");
}