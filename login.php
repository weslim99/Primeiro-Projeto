<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<p><a href="indice.php"></a></p>
	<form method="POST">
		<p>Email:<input type="text" name="email"></p>
		<p>Senha:<input type="password" name="senha"></p>
		<p><input type="submit" value="Entrar"></p>
	</form>
</body>
</html>

<?php 
session_start();

if (!empty($_POST)) {
	if ($_POST['email'] == 'admin' && $_POST['senha'] == 'admin') {
		
		$_SESSION['logado'] = true;

		$_SESSION['nome'] = 'Administrador';
		header('location: admin.php');
	}else{

		echo '<p><strong>Login ou senha inválidos</strong></p>';
	}

}




 ?>