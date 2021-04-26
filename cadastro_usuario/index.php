<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro usuário</title>
	<meta charset="utf-8">
</head>
<body>

	<div align="center">
		<h1>Cadastro Usuário</h1>
	</div>

	<?php
		if(isset($_SESSION['mensagem'])){
			echo $_SESSION['mensagem'];
			unset ($_SESSION['mensagem']);
		}
	?>

	<form method="post" action="processamento.php">

		<label>Nome:</label><br><br>
		<input type="text" name="nome" placeholder="Nome completo"><br><br>
		<label>Endereço:</label><br><br>
		<input type="text" name="endereco" placeholder="Endereço"><br><br>
		<label>E-mail:</label><br><br>
		<input type="email" name="email" placeholder="E-mail"><br><br>
		<label>Usuário:</label><br><br>
		<input type="text" name="usuario" placeholder="Usuário"><br><br>
		<label>Senha:</label><br><br>
		<input type="password" name="senha" placeholder="Senha"><br><br>
		<input type="submit" value="Cadastrar"><br><br>
		<a href="indexlogin.php">Login</a>

	</form>

	

</body>
</html>