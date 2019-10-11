<?php

/* esta página é protegida
de acesso indevido */
session_start();

require_once 'funcoes.php';
require_once 'tarefas.modelo.php';

if (empty($_SESSION['usuario']))
{
	// o usuario nao esta logado
	// redirecionaod para a pagina de login
	header("Location: login.php");
}

// se chegou aqu, eh pq o usuario esta logado
$tarefas = buscarTarefas($_SESSION['usuario']);

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

	<h2>Tarefas</h2>

	<?php foreach ($tarefas as $t): ?>

		<p><?= $t['descricao'] ?></p>

	<?php endforeach; ?>

</body>
</html>
