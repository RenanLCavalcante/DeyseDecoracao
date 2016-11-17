<?php
	require_once("../model/User.php");
	require_once("../dao/UserDAO.php");
	header("Content-type: text/html; charset=utf-8");

	$acao="";
	if (isset($_POST["acao"])) {
		$acao = $_POST["acao"];
	}else{
		$acao = $_GET["acao"];
	}
	switch ($acao) {
		case '+':
			create();
			break;
		case 'list':
			//listar();
			break;
		case 'update':
			//update();
			break;
		case 'remove':
			//remove();
			break;
		default:
			echo "Nenhuma opção foi encontrada!";
			break;
	}

	
	function create(){

		$user = new User();
		
		$user->setNome(htmlentities($_POST["nome"]));

		$user->setNascimento(htmlentities($_POST["nascimento"]));

		$user->setEmail(htmlentities($_POST["email"]));

		$userDAO = new UserDAO();

		$userDAO->create($user);

		header("Location: ../sucesso.php");
	}
?>