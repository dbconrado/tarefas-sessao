<?php

session_start();

require_once 'funcoes.php';

$mensagem = '';

if (!empty($_SESSION['usuario']))
{
	// o usuario ja esta logado
	header("Location: index.php");
}

if (!empty($_POST['usuario']))
{

	if (usuarioSenhaCorreta(
		$_POST['usuario'],
		$_POST['senha']
	)) {
		// logar o usuario
		$_SESSION['usuario'] = $_POST['usuario'];

		// redirecionar para index.php
		header('Location: index.php');
	} else {
		// usuario e senha incorretos
		$mensagem = 'usuario e senha incorretos';
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Bem vindo ao sistema de tarefas</h1>

	<form action="login.php" method="post">
		<label for="">Usuário</label>
		<input type="text" name="usuario">
		<label for="">Senha</label>
		<input type="password" name="senha">
		<button>Entrar</button>
	</form>
	<p><?= $mensagem ?></p>
</body>
</html>