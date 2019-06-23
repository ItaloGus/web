<div align="center">
<?php

include_once("conexao.php");

$Nome_livraria = filter_input(INPUT_POST, 'Nome_livraria', FILTER_SANITIZE_STRING); 
$CNPJ_livraria = filter_input(INPUT_POST, 'CNPJ_livraria', FILTER_SANITIZE_STRING);
$Endereco_livraria = filter_input(INPUT_POST, 'Endereco_livraria', FILTER_SANITIZE_STRING);
$Telefone_livraria = filter_input(INPUT_POST, 'Telefone_livraria', FILTER_SANITIZE_STRING);

$resultado_cadastro = "INSERT INTO tb_livraria VALUES ('$Nome_livraria', '$CNPJ_livraria', '$Endereco_livraria', '$Telefone_livraria')";
$resultado = mysqli_query($conn, $resultado_cadastro);

if ($resultado) {
echo "<center><h1>cadastro efetuado com sucesso!</h1>";
}else{
echo "<center><h1>Erro ao efetuar o cadastro!</h1>";
}
?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_3_cadastrar_livraria.php">Voltar ao menu de Cadastro</a>
</div>