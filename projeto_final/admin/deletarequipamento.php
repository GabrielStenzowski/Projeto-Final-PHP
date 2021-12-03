<?php 

	include_once 'lock.php';

	if (!isset($_GET['id_equipamento']))
	{
		header('location:index.php?msg=idinvalido');
	}	
	else 
	{
		$id_equipamento = $_GET['id_equipamento'];

		include_once '../database/equipamento.dao.php';

		$result = deletar_equipamento($id_equipamento);

		if ($result)
		{
			header('location:index.php?msg=deletado');
		}
		else
		{
			header('location:index.php?msg=errodeletar');
		}
	}

?>