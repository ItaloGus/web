<div align="center">
<?php

include_once("conexao.php");

$resultado_pesquisar = "select * from tb_livro" ;
$resultado = mysqli_query($conn, $resultado_pesquisar);
$Texto = "Tabela de Livros";
	echo '<h3>'.$Texto.'</h3>';
	
    //crie uma variável para receber o código da tabela
    $tabela = '<table border="6">';//abre table
    $tabela .='<thead>'; //abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
    $tabela .= '<th>Autor</th>';
    $tabela .= '<th>Editora</th>';
    $tabela .= '<th>ISBN</th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    while ($rows_livrarias = mysqli_fetch_array($resultado)) {
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$rows_livrarias['Nome_Livro'].'</td>'; //coluna nome livro
    $tabela .= '<td>'.$rows_livrarias['Autor_Livro'].'</td>'; // coluna autor livro
    $tabela .= '<td>'.$rows_livrarias['Editora_Livro'].'</td>'; //coluna editora livro
    $tabela .= '<td>'.$rows_livrarias['ISBN_Livro'].'</td>';//coluna isbn livro
    $tabela .= '</tr>'; // fecha linha
    }
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    echo $tabela; // imprime
?>
<div>