<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdname = "livraria";

//Criar a conexão
$conn = mysqli_connect($servidor,$usuario, $senha, $bdname) or die("Não foi possivel conectar!");