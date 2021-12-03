<?php 
	include_once 'lock.php';
	include_once '../database/equipamento.dao.php';

	if (!isset($_GET['id_equipamento']))
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		// tentar buscar o equipamento especificado
		$result = buscar_equipamento($_GET['id_equipamento']);

		if($result == null)
		{
			header('location:index.php?msg=idinvalido');
		}
		else
		{
			// converver o result em um array associativo
			$equipamento = mysqli_fetch_assoc($result);
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Área de Administrador</title>
</head>
<body class="container-fluid">

	<div text-align="center">
	<h1>Loja de Periféricos - Editar Equipamento </h1>
	</div>
		<p>
			<a href="index.php" class="btn btn-danger btn-sm">Cancelar Edição</a>
		</p>

		<h3>Editar Equipamento:</h3>

		<div class="col-3"> <form action="editadoequipamento.php" method="post">

				<p>
					<label class="form-label">Modelo</label><br>
					<input type="text" name="modelo" required value="<?= $equipamento['modelo'] ?>" class="form-control">
				</p>
				
				<p>
					<label class="form-label">Valor</label><br>
					<input type="number" name="valor" required value="<?= $equipamento['valor'] ?>" class="form-control"> 
				</p>

				<p>
					<label class="form-label">Quantidade</label><br>
					<input type="number" name="quantidade" required value="<?= $equipamento['quantidade'] ?>" class="form-control">
				</p>

				<p>
					<button type="submit" name="salvar" class="btn btn-success btn-sm">Salvar Alterações</button>
				</p>

				<input type="hidden" name="id_equipamento" value="<?= $equipamento['id_equipamento'] ?>">

			</form>
		</div>	

</body>
</html>