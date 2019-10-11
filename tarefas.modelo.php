<?php

require_once 'funcoes.php';

function criarTarefa($usuario,$descricao,$prazo)
{
	$con = criarConexao();
	// colunas:
	// id, descricao, prazo, concluida, usuario
	$sql = <<<EOF
	INSERT INTO tarefa VALUES 
	(null, ?, ?, 'N', ?)
EOF;
	$comando = $con->prepare($sql);
	$comando->execute([
		$descricao,
		$prazo,
		$usuario	
	]);

}

function buscarTarefas($usuario) 
{
	$con = criarConexao();
	$sql = "SELECT * FROM tarefa WHERE username=?";
	$comando = $con->prepare($sql);
	$comando->execute([ $usuario ]);
	return $comando->fetchAll();
}





?>