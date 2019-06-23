<div align="center">
<?php

include_once("conexao.php");

$resultado_pesquisar = "select * from tb_livraria" ;
$resultado = mysqli_query($conn, $resultado_pesquisar);
$Texto = "Tabela de Livrarias";
	echo '<h3>'.$Texto.'</h3>';
	
    //crie uma variável para receber o código da tabela
    $tabela = '<table border="6">';//abre table
    $tabela .='<thead>'; //abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
    $tabela .= '<th>Endereço</th>';
    $tabela .= '<th>CNPJ</th>';
    $tabela .= '<th>Telefone</th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    while ($rows_livrarias = mysqli_fetch_array($resultado)) {
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$rows_livrarias['Nome_Livraria'].'</td>'; //coluna nome livraria
    $tabela .= '<td>'.$rows_livrarias['Endereco_Livraria'].'</td>'; // coluna cnpj livraria
    $tabela .= '<td>'.$rows_livrarias['CNPJ_Livraria'].'</td>'; //coluna endereço livraria
    $tabela .= '<td>'.$rows_livrarias['Telefone_Livraria'].'</td>';//coluna telefone livraria
    $tabela .= '</tr>'; // fecha linha
    }
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    echo $tabela; // imprime
?>
<div>