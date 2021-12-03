<?php 

	if (!isset($_POST['salvar']) || empty($_POST['modelo']) || empty($_POST['valor']) || empty($_POST['quantidade']))
	{
		header('location:index.php?msg=faltadecadastro');
	}

	else
	{
		$modelo = $_POST['modelo'];
		$valor = $_POST['valor'];
		$quantidade = $_POST['quantidade'];

		include_once '../database/equipamento.dao.php';

		$result = salvar_equipamento($modelo, $valor, $quantidade);

		if ($result)
		{
			header('location:index.php?msg=cadastrado');
		}
		else 
		{ 
			header('location:index.php?msg=naocadastrado');
		}
	}

?>