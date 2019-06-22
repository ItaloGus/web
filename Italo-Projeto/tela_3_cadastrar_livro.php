<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title> 
</head>
<body>
	<div align="center">
		<img src="1_logo.jpg">

		<form action="_inserir_dados_livros.php" method="post">
		<label>Nome</label><br>
		<input type="text" name="Nome_Livro" size="60" maxlength="100" placeholder="Ex.As crônicas de Nárnia: O leão, a feiticeira e o guarda-roupa" style="text-align: center;">

		<br><label>Autor</label><br>
		<input type="text" name="Autor_Livro" size="60" maxlength="100" placeholder="Ex.Clive Staples Lewis" style="text-align: center;">

		<br><label>Editora</label><br>
		<input type="text" name="Editora_Livro" size="60" maxlength="100" placeholder="Ex.ABU" style="text-align: center;">
		
		<br><label>ISBN</label><br>
		<input type="number" name="ISBN_Livro" size="80" maxlength="100" placeholder="Ex.9781624053658" style="text-align: center;">

		<br><br><input type="submit" value="CADASTRAR" ><br>
		</form>
	</div>
 <h5>Digite os números sem os caractere especiais!</h5>
</body>
</html>