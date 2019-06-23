<?php

include_once("conexao.php");

$Nome_Livraria = filter_input(INPUT_POST, 'Pesquisa_Livraria', FILTER_SANITIZE_STRING); 
$CNPJ_Livraria = filter_input(INPUT_POST, 'CNPJ_Livraria', FILTER_SANITIZE_STRING);

$resultado_pesquisar = "select * from tb_livraria where Nome_Livraria LIKE '%$Nome_Livraria%' and CNPJ_Livraria LIKE '%$CNPJ_Livraria%'" ;
$resultado = mysqli_query($conn, $resultado_pesquisar);
?>

<div align="center">
<?php
if ($resultado) {
while ($rows_livrarias = mysqli_fetch_array($resultado)) {
	echo '<hr>';
	echo "Nome da Livraria:".$rows_livrarias['Nome_Livraria']."<br>"."Endereço da Livraria:".$rows_livrarias['Endereco_Livraria']."<br>"."CNPJ da Livraria:".$rows_livrarias['CNPJ_Livraria']."<br>"."Telefone da Livraria:".$rows_livrarias['Telefone_Livraria']."<br>";
	echo '<hr>';
}}

?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_4_Pesquisar_livraria.php">Voltar ao menu de Pesquisa</a>
<div>