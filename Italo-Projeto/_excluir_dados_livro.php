<?php
session_start();
include_once("conexao.php");

$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);

$resultado_excluir = "delete from tb_livro where ISBN_Livro = '$ISBN_Livro'" ;

$resultado = mysqli_query($conn, $resultado_excluir);

?>