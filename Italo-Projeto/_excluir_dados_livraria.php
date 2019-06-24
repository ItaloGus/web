<?php

include_once("conexao.php"); 

$CNPJ_Livraria = filter_input(INPUT_POST, 'CNPJ_Livraria', FILTER_SANITIZE_STRING);

$resultado_excluir = "delete from tb_livraria where CNPJ_Livraria = '$CNPJ_Livraria'" ;
$resultado_busca = "select from tb_livraria where CNPJ_Livraria = '$CNPJ_Livraria'" ;

$resultado = mysqli_query($conn, $resultado_excluir);

if ($resultado == True) {
	if($total = msql_num_rows($resultado_busca)){
	echo "<center><h1>Exclusão efetuado com sucesso! $total </h1>";
}
}else{
echo "<center><h1>Erro ao efetuar a Exclusão!</h1>";
}
?>
<a href="tela_2_opcao.php">Voltar ao menu de Opções</a><br><br>
<a href="tela_5_Excluir_livraria.php">Voltar ao menu de Exclusão</a>
</div>