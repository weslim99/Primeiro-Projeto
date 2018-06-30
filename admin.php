<?php 

	session_start();
	if (!$_SESSION['logado']) {
		header('location: login.php');

	}

	$nome = $_SESSION['nome'];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin</title>
 </head>
 <body>
 	<p><a href="logout.php">Logout</a></p>
 	<h1>Admin</h1>
 	<p>Bem Vindo, <strong><?= $nome ?></strong></p>
 </body>
 </html>