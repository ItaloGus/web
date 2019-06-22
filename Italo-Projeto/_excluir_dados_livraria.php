<?php

include_once("conexao.php"); 

$CNPJ_Livraria = filter_input(INPUT_POST, 'CNPJ_Livraria', FILTER_SANITIZE_STRING);

$resultado_excluir = "delete from tb_livraria where CNPJ_Livraria = '$CNPJ_Livraria'" ;

$resultado = mysqli_query($conn, $resultado_excluir);

?>