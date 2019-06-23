<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title> 
</head>
<body>
	<div align="center">
		<img src="imagens/1_logo.jpg">

		<form action="_inserir_dados_livraria.php" method="post">
		<label>Livraria</label><br>
		<input type="text" name="Nome_livraria" size="40" maxlength="100" placeholder="Ex.SARAU" style="text-align: center;">
		
		<br><label>Endereco</label><br>
		<input type="text" name="Endereco_livraria" size="40" maxlength="100" placeholder="Ex.Wall Street" style="text-align: center;">

		<br><label>CNPJ</label><br>
		<input type="number" name="CNPJ_livraria" size="20" maxlength="100" placeholder="Ex.00.000.000/0000-00" style="text-align: center;">

		<br><label>Telefone</label><br>
		<input type="number" name="Telefone_livraria" size="20" maxlength="100" placeholder="Ex.(000)0000-0000" style="text-align: center;">

		<br><br><input type="submit" value="CADASTRAR" ><br>
		</form>
	</div>
<h5>Digite os números sem caractere especiais!</h5>
</body>
</html>