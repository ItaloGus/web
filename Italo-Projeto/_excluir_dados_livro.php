<div align="center">
<?php
session_start();
include_once("conexao.php");

$ISBN_Livro = filter_input(INPUT_POST, 'ISBN_Livro', FILTER_SANITIZE_STRING);
$resultado_excluir = "delete from tb_livro where ISBN_Livro = '$ISBN_Livro'" ;
$resultado = mysqli_query($conn, $resultado_excluir);

if ($resultado) {
echo "<center><h1>Exclusão efetuado com sucesso!</h1>";
}else{
echo "<center><h1>Erro ao efetuar a Exclusão!</h1>";
}
?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_5_Excluir_livro.php">Voltar ao menu de Exclusão</a>
</div>