<?php

include_once("conexao.php");

$Nome_Livro = filter_input(INPUT_POST, 'Pesquisa_Livro', FILTER_SANITIZE_STRING); 
$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);

$resultado_pesquisar = "select * from tb_livro where Nome_Livro LIKE '%$Nome_Livro%' and ISBN_Livro LIKE '%$ISBN_Livro%'" ;
$resultado = mysqli_query($conn, $resultado_pesquisar);
?>

<div align="center">
<?php
while ($rows_livros = mysqli_fetch_array($resultado)) {
	echo "Nome do Livro:".$rows_livros['Nome_Livro']."<br>"."ISBN do Livro:".$rows_livros['ISBN_Livro']."<br>"."<br>";
}
?>
</div>