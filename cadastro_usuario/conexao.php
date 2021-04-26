<?php
	session_start();
	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "cadastro_usuario";

	$conexao = mysqli_connect($host, $usuario, $senha, $db_name) or die ("Erro na conexão com o banco de dados");
?>