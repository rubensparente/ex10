<?php
	#Receber os dados do formulario
	$dados = $_POST;

	# Transformar o array em string
	$dados = implode(" - ", $dados);

	# Criar um arquivo txt

	$arquivo = fopen("funcionarios.txt", "a+");

	# Escrevendo os dados do produto no arquivo

	fwrite($arquivo, $dados."\n");

	# Fechar o arquivo

	fclose($arquivo);

	# Redirecionar para a tabela com a listagem
	header("location: listaFuncionarios.php");


?>