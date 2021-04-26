<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>

	<div align="center"> <h1>Login</h1></div>

	<?php
		if(isset($_SESSION['mensagem'])){
			echo $_SESSION['mensagem'];
			unset ($_SESSION['mensagem']);
		}
	?>

	<form method="post" action="login.php">
		
		<label>Usuário:</label><br><br>
		<input type="text" name="usuario" placeholder="Usuário"><br><br>
		<label>Senha:</label><br><br>
		<input type="password" name="senha" placeholder="Senha"><br><br>
		<input type="submit" value="Entrar"><br><br>

		<a href="index.php">Cadastre-se</a>
		
	</form>

</body>
</html>