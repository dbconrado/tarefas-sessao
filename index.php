<?php

/* esta página é protegida
de acesso indevido */
session_start();

require 'funcoes.php';

if (empty($_SESSION['usuario']))
{
	// o usuario nao esta logado
	// redirecionaod para a pagina de login
	header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Bem-vindo, 
		<?= $_SESSION['usuario'] ?>
	</h1>
	<a href="logout.php">Sair do sistema</a>
</body>
</html>
