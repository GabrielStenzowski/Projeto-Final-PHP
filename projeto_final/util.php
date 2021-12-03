<?php 

//função para validar uma msg e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) 
	{
		case 'embranco':
			$retorno = '<h3 class="alert alert-warning" role="alert">Informe os dados de login!</h3>';
		break;

		case 'login invalido':
			$retorno = '<h3 class="alert alert-danger" role="alert">Usuário ou Senha incorreta</h3>';
		break;

		case 'faltadecadastro':
			$retorno = '<h3 class="alert alert-warning" role="alert">Preencha todos os dados</h3>';
		break;

		case 'cadastrado':
			$retorno = '<h3 class="alert alert-success" role="alert">Equipamento Cadastrado!</h3>';
		break;

		case 'naocadastrado':
			$retorno = '<h3 lass="alert alert-warning" role="alert">Erro ao cadastro do Equipamento!</h3>';
		break;

		case 'editarembranco':
			$retorno = '<h3 class="alert alert-warning" role="alert">Preenchar todos os dados para editar</h3>';
		break;

		case 'idinvalido':
			$retorno = '<h3 class="alert alert-warning" role="alert">ID do equipamento invalido</h3>';
		break;

		case 'deletado':
			$retorno = '<h3 class="alert alert-warning" role="alert">Equipamento Deletado!</h3>';
		break;

		case 'errodeletar':
			$retorno = '<h3 class="alert alert-warning" role="alert">Erro ao deletar equipamento</h3>';
		break;

		case 'editado':
			$retorno = '<h3 class="alert alert-success" role="alert">Equipamento editado com sucesso!</h3>';
		break;

		case 'erroeditar':
			$retorno = '<h3 class="alert alert-warning" role="alert">Erro ao editar equipamento</h3>';
		break;
		
		default:
			$retorno = '';
		break;
	}

	return $retorno;
}
?>