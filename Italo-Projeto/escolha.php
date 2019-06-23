<?php
$escolha = filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_STRING);
$opcao = filter_input(INPUT_POST, 'opcao', FILTER_SANITIZE_STRING);

if ($escolha == 1 and "$opcao" == 'livro'){
	header("Location: tela_3_cadastrar_livro.php");
} elseif ($escolha == 2 and "$opcao" == 'livro'){
	header("Location: tela_4_pesquisar_livro.php");
} elseif ($escolha == 3 and "$opcao" == 'livro'){
	header("Location: tela_5_excluir_livro");
} elseif ($escolha == 4 and "$opcao" == 'livro'){
	header("Location: tela_6_tabela_livro");
} elseif ($escolha == 1 and "$opcao" == 'livraria'){
	header("Location:tela_3_cadastrar_livraria.php");
} elseif ($escolha == 2 and "$opcao" == 'livraria'){
	header("Location: tela_4_pesquisar_livraria.php");
} elseif ($escolha == 3 and "$opcao" == 'livraria'){
	header("Location: tela_5_excluir_livraria");
} else {
	header("Location: tela_6_tabela_livraria");
}