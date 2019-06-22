<?php

include_once("conexao.php");

$Nome_Livro = filter_input(INPUT_POST, 'Nome_Livro', FILTER_SANITIZE_STRING); 
$Autor_Livro = filter_input(INPUT_POST, 'Autor_Livro', FILTER_SANITIZE_STRING);
$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);
$Editora_Livro = filter_input(INPUT_POST, 'Editora_Livro', FILTER_SANITIZE_STRING);

$resultado_cadastro = "INSERT INTO tb_livro VALUES ('$Nome_Livro', '$Autor_Livro', '$ISBN_Livro', '$Editora_Livro')";
$resultado = mysqli_query($conn, $resultado_cadastro);

header("Location: tela_2_opcao.php");