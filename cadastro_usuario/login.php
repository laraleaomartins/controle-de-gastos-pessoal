<?php

	include_once("conexao.php");

	if(empty($_POST['usuario']) || empty($_POST['senha'])){
		header('Location: indexlogin.php');
		exit();
	}

	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); 
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	
	// oque aconteceu era erro de formatação sua query 
	// quando usamos "" podemos "proteger" a variavel com {$variavel} 
	$query = "SELECT usuario, senha FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

	$resultado = mysqli_query($conexao, $query);
	

	 $row = mysqli_num_rows($resultado); // essa função retorna 1 se constar os dados no db e 0 se não constar os dados no db
	
		if($row == 1){
			$_SESSION['usuario'] = $usuario;
			header('Location: painel.php');
			exit();
		}else{
			header('Location: indexlogin.php');
			exit();
		}

		if(empty($_POST['usuario']) || empty($_POST['senha'])){
		header('Location: indexlogin.php');
		exit();
		}

?>

