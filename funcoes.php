<?php

function criarConexao()
{
	$banco = "tarefas";
	$usuario = "admtarefa";
	$senha = "123";
	$conexao = new PDO("mysql:host=localhost;dbname=$banco", $usuario, $senha);
	return $conexao;
}

function usuarioSenhaCorreta($usuario, $senha)
{
	$sql = "SELECT * FROM usuario WHERE username=? AND senha=?";
	$conexao = criarConexao();
	$comando = $conexao->prepare($sql);
	$comando->execute([
		$usuario, $senha
	]);
	if ($comando->rowCount() == 0)
		return false;
	else
		return true;
}

?>