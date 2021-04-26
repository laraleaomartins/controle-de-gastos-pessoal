<?php
	session_start();
	
	
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario']; 
	$senha = $_POST['senha'];
	$id_usuario = $_SESSION['id_usuario'];



	$buscaUsuarios = "SELECT * FROM tb_usuario WHERE (usuario = '$usuario')";
	$resultado = mysqli_query($conexao, $buscaUsuarios);
	$resultadoBuscaUsuario = mysqli_fetch_assoc($resultado);

	$buscaEmail = "SELECT * FROM tb_usuario WHERE (email = '$email')";
	$resultadoEmail = mysqli_query($conexao, $buscaEmail);
	$resultadoBuscaEmail = mysqli_fetch_assoc($resultadoEmail);

	if ($resultadoBuscaUsuario != null) {

		$_SESSION['mensagem'] = "<p style='color:red;'><strong>Usuário já existe, escolha outro usuário!</strong></p>";
		header('Location: index.php');

	}else if($resultadoBuscaEmail != null){

		$_SESSION['mensagem'] = "<p style='color:red;'><strong>Email já existe, escolha outro e-mail!</strong></p>";
		header('Location: index.php');

	}else if($nome == null || $endereco == null || $email == null || $usuario == null || $senha == null){

		$_SESSION['mensagem'] = "<p style='color:red;'><strong>Por favor preencha todos os campos!</strong></p>";
		header('Location: index.php');
	}
	else{

		$query = "INSERT INTO tb_usuario (nome, endereco, email, usuario, senha, criado_dia)VALUES('$nome', '$endereco', '$email', '$usuario', '$senha', NOW())";
		$query1 = mysqli_query($conexao, $query);

		$_SESSION['mensagem'] = "<p style='color:green;'><strong>Usuário cadastrado com sucesso!</strong></p>";
			header('Location: index.php');
	}


?>