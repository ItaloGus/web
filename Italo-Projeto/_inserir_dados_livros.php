<div align="center">
<?php

include_once("conexao.php");

$Nome_Livro = filter_input(INPUT_POST, 'Nome_Livro', FILTER_SANITIZE_STRING); 
$Autor_Livro = filter_input(INPUT_POST, 'Autor_Livro', FILTER_SANITIZE_STRING);
$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);
$Editora_Livro = filter_input(INPUT_POST, 'Editora_Livro', FILTER_SANITIZE_STRING);

$resultado_cadastro = "INSERT INTO tb_livro VALUES ('$Nome_Livro', '$Autor_Livro', '$ISBN_Livro', '$Editora_Livro')";
$resultado = mysqli_query($conn, $resultado_cadastro);

if ($resultado) {
echo "<center><h1>cadastro efetuado com sucesso!</h1>";
}else{
echo "<center><h1>Erro ao efetuar o cadastro!</h1>";
}
?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_3_cadastrar_livro.php">Voltar ao menu de Cadastro</a>
</div>