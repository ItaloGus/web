<?php

include_once("conexao.php");

$Nome_Livraria = filter_input(INPUT_POST, 'Pesquisa_Livraria', FILTER_SANITIZE_STRING); 
$CNPJ_Livraria = filter_input(INPUT_POST, 'CNPJ_Livraria', FILTER_SANITIZE_STRING);

$resultado_pesquisar = "select * from tb_livraria where Nome_Livraria LIKE '%$Nome_Livraria%' and CNPJ_Livraria LIKE '%$CNPJ_Livraria%'" ;

$resultado = mysqli_query($conn, $resultado_pesquisar);
?>
<div align="center">
<?php
while ($rows_livrarias = mysqli_fetch_array($resultado)) {
	echo "Nome da Livraria:".$rows_livrarias['Nome_Livraria']."<br>"."CNPJ da Livraria:".$rows_livrarias['CNPJ_Livraria']."<br>"."<br>";
}
?>
<div>