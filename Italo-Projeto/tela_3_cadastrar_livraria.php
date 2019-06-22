<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title> 
</head>
<body>
	<div align="center">
		<img src="1_logo.jpg">

		<form action="_inserir_dados_livraria.php" method="post">
		<label>Livraria</label><br>
		<input type="text" name="Nome_livraria" placeholder="Ex.SARAU">

		<br><label>CNPJ</label><br>
		<input type="number" name="CNPJ_livraria" placeholder="Ex.00.000.000/0000-00">

		<br><label>Endereco</label><br>
		<input type="text" name="Endereco_livraria" placeholder="Ex.Wall Street">

		<br><label>Telefone</label><br>
		<input type="number" name="Telefone_livraria" placeholder="Ex.(000)0000-0000">

		<br><br><input type="submit" value="CADASTRAR" ><br>
		</form>
	</div>
 <h5>Digite os números sem caractere especiais!</h5>
</body>
</html>