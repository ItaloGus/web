<?php

include_once("conexao.php");

$Nome_Livro = filter_input(INPUT_POST, 'Pesquisa_Livro', FILTER_SANITIZE_STRING); 
$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);

$resultado_pesquisar = "select * from tb_livro where Nome_Livro LIKE '%$Nome_Livro%' and ISBN_Livro LIKE '%$ISBN_Livro%'" ;
$resultado = mysqli_query($conn, $resultado_pesquisar);
?>

<div align="center">
<?php
if ($resultado) {
while ($rows_livros = mysqli_fetch_array($resultado)) {
	echo '<hr>';
	echo "Nome do Livro:".$rows_livros['Nome_Livro']."<br>"."Autor do Livro:".$rows_livros['Autor_Livro']."<br>"."Editora do Livro:".$rows_livros['Editora_Livro']."<br>"."ISBN do Livro:".$rows_livros['ISBN_Livro']."<br>";
	echo '<hr>';
}}

?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_4_Pesquisar_livro.php">Voltar ao menu de Pesquisa</a>
</div>