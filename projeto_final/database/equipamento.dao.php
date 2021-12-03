<?php  
	
	include_once 'conn.php';

	function salvar_equipamento($modelo, $valor, $quantidade)
	{
		$conn = conectar();

		$sql = "INSERT INTO equipamento_tb (modelo, valor, quantidade) VALUES ('$modelo', 
			'$valor', '$quantidade')";
		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			return true;
		}

		return false; 
	}

	//function para a busca de todos os equipamentos
	function buscar_equipamento()
	{
		$conn = conectar();

		$sql = "SELECT * FROM equipamento_tb";

		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			return $result;
		}	

		return null;
	}

	//function exibir equipamento 
	function exibir_equipamento()
	{
		$result = buscar_equipamento();

		//caso o valor de $result seja nulo, msg de erro ira aparcer 
		if ($result == null)
		{
			$retorno = '<h3>Sem equipamento cadastrado</h3>';
		}
		else // caso tenha pelo menos um equipamento, ira exibir ele
		{
			$retorno = '<table class="table table-bordered"">';
			// montagem cabeçalho da tabel
			$retorno .= '<tr>';
			$retorno .= '<th>ID #</th>'; //coluna de cabeçalho = th = table header
			$retorno .= '<th>Modelo</th>';
			$retorno .= '<th>Valor</th>';
			$retorno .= '<th>Quantidade</th>';
			$retorno .= '<th>Deletar</th>';
			$retorno .= '<th>Editar</th>';
			$retorno .= '</tr>';
			
			while ($equipamento = mysqli_fetch_assoc($result))
			{
				// dentro do laço, montagem novas linhas pra tabela
				$retorno .= '<tr>';
				// coluna simples da tabela = td = table data
				$retorno .= "<td>" . $equipamento['id_equipamento']   . "</td>";
				$retorno .= "<td>" . $equipamento['modelo'] 	  . "</td>";
				$retorno .= "<td>" . $equipamento['valor'] 	  . "</td>";
				$retorno .= "<td>" . $equipamento['quantidade'] . "</td>";
				$retorno .= "<td>" . link_deletar($equipamento['id_equipamento'] )   . "</td>"; 
				$retorno .= "<td>" . link_editar($equipamento['id_equipamento'] )	 . "</td>";  
				$retorno .= '</tr>'; // fim da linha da tabela
			}

			$retorno .= '</table>';			
		}	

		return $retorno;
	}

	// função para montar o link de exclusão 
	function link_deletar($id_equipamento)
	{
		$link = '<a href="deletarequipamento.php?id_equipamento='.$id_equipamento.'"onclick="return confirm(\'Tem certeza que deseja excluir este equipamento ?\')" class="btn btn-danger btn-sm">Deletar</a>';

		return $link;
	}

	// função para montar o link para editar
	function link_editar($id_equipamento)
	{
		$link = '<a href="editarequipamento.php?id_equipamento="'.$id_equipamento.' class="btn btn-warning btn-sm ">Editar</a>';
		return $link;
	}	

	// função para deletar um equipamento
	function deletar_equipamento($id_equipamento)
	{
		$conn = conectar();

		$sql = "DELETE FROM equipamento_tb WHERE id_equipamento = $id_equipamento";

		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			return true;
		}

		return false;
	}
	

	//função para editar (atualizar) um equipamento
	function editar_equipamento($id_equipamento, $modelo, $valor, $quantidade)
	{
		$conn = conectar();

		$sql = "UPDATE equipamento_tb SET modelo = '$modelo', valor = '$valor', quantidade = '$quantidade' WHERE id_equipamento = $id_equipamento";

		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			return true;
		}

		return false;
	}


?>