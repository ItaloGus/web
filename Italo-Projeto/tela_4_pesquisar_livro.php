<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title> 
</head>
<body>
		<div align="center">
		<img src="imagens/1_logo.jpg">
		<form action="_pesquisar_dados_livro.php" method="post">
		<h2>Pesquisa do livro</h2>
		<input type="text" name="Pesquisa_Livro" size="60" maxlength="100" placeholder="Ex.As crônicas de Nárnia: O leão, a feiticeira e o guarda-roupa" style="text-align: center;">
		<h2>ISBN do livro</h2>
		<input type="text" name="ISBN_Livro" size="40" maxlength="100" placeholder="Ex.9781624053658" style="text-align: center;">

		<br><br><input type="submit" value="PESQUISAR" ><br>
		</form>
		</div>
<h5>Digite os números sem caractere especiais!</h5>
</body>
</html>