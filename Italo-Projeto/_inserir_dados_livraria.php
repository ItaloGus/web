<?php

include_once("conexao.php");

$Nome_livraria = filter_input(INPUT_POST, 'Nome_livraria', FILTER_SANITIZE_STRING); 
$CNPJ_livraria = filter_input(INPUT_POST, 'CNPJ_livraria', FILTER_SANITIZE_STRING);
$Endereco_livraria = filter_input(INPUT_POST, 'Endereco_livraria', FILTER_SANITIZE_STRING);
$Telefone_livraria = filter_input(INPUT_POST, 'Telefone_livraria', FILTER_SANITIZE_STRING);

$resultado_cadastro = "INSERT INTO tb_livraria VALUES ('$Nome_livraria', '$CNPJ_livraria', '$Endereco_livraria', '$Telefone_livraria')";
$resultado = mysqli_query($conn, $resultado_cadastro);

header("Location: tela_2_opcao.php");