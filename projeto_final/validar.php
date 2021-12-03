<?php
	
	if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha']))
	{
		header('location:index.php?msg=paginaembranco');
	}

	else
	{
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		include_once 'database/usuario.dao.php';

		$result = buscar_usuario($usuario, $senha);

		if ($result)
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;

			header('location:admin/index.php');
		}
		else 
		{
			header('location:index.php?msg=login invalido');
		}
	}
	
?>