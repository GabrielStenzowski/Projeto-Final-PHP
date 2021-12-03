<?php 
include_once 'lock.php';
include_once '../database/equipamento.dao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title >Projeto Final - Área de Administrador</title>
</head>
<body class="container-fluid">

		<h1>Loja de Periféricos - Área de Administrador</h1>

		<p>
			<a href="logout.php" class="btn btn-danger btn-sm">Sair do Sistema</a>
		</p>

		<?php 
		if (isset($_GET['msg']))
		{
			include_once '../util.php';
			echo validar_msg($_GET['msg']);
		}
		?>

	<h3>Cadastrar Equipamento:</h3>
	<div class="col-3">
		<form action="cadastrarequipamento.php" method="post">

				<p>					
					<label class="form-label">Modelo</label><br>
					<input type="text" name="modelo" required class="form-control">
				</p>
				
				<p>
					<label class="form-label">Valor</label><br>
					<input type="number" name="valor" required class="form-control">
				</p>

				<p>
					<label class="form-label ">quantidade</label><br>
					<input type="number" name="quantidade" required class="form-control">
				</p>

				<p>
					<button type="submit" name="salvar" class="btn btn-success btn-sm">SALVAR</button>
				</p>
		
		</form><br>	
	</div>

		<h2>Equipamentos Cadastrados</h2>

		<?php

			echo exibir_equipamento();

		?>	
</body>
</html>