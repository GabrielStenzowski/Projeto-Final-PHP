<?php 

	include_once 'lock.php';

	// se o form de edição nao foi enviado ou algum campo em branco
	if (!isset($_POST['salvar']) || empty($_POST['modelo']) || empty($_POST['valor']) || empty($_POST['quantidade']))
	{
		header('location:index.php?msg=editarembranco');
	}
	else 
	{
		$id_equipamento = $_POST['id_equipamento']; 
		$modelo = $_POST['modelo'];
		$valor = $_POST['valor'];
		$quantidade = $_POST['quantidade'];

		include_once '../database/equipamento.dao.php';

		$result = editar_equipamento($id_equipamento, $modelo, $valor, $quantidade);

		if ($result)
		{
			header('location:index.php?msg=editado');
		}
		else 
		{
			header('location:index.php?msg=erroeditar');
		}
	}
		

?>