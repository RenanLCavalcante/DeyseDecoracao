<?php
	require_once("../model/User.php");
	require_once("../util/ConexaoPDO.php");

	class UserDAO
	{
		
		function __construct() {

		}

		public function create ($user){

			try{
				$conexaoPDO = new ConexaoPDO();
				echo "string";
				$conexao = $conexaoPDO->abreConexao();
				$createQuery = $conexao->prepare("INSERT INTO deysedecor.user (nome,nascimento,email) 
													VALUES (:nome,:nascimento,:email); ");
				$createQuery->bindValue(':nome',$user->getNome());
				$createQuery->bindValue(':nascimento',$user->getNascimento());
				$createQuery->bindValue(':email',$user->getEmail());

				$createQuery->execute();
				$conexaoPDO->fechaConexao();
			}catch(Exception $e){
				echo "Erro ao tentar cadastrar.".$e->getMessage();
			}
		}

		// public function list(){
		// 	try{
		// 		$ConexaoDB = new ConexaoDB();
		// 		$conexao = $ConexaoDB->abreConexao();
		// 		$sql = $conexao->prepare("SELECT * FROM deysedecor.user;");
		// 		$sql->execute();
		// 		$arrayUser = array();
		// 		for($i=0; $linha = $sql->fetch(PDO::FETCH_ASSOC); $i++){
		// 			$user = new Cliente();
		// 			$user->setId($linha['id']);
		// 			$user->setNome($linha['nome']);
		// 			$user->setNascimento($linha['nacimento']);
		// 			$user->setEmail($linha['email']);
		// 			$arrayUser[$i]=$user;
		// 		}
		// 		$ConexaoDB->fechaConexao();
		// 		return $arrayUser;
		// 	}catch(Exception $e){
		// 		echo "Erro ao tentar listar.".$e->getMessage();
		// 	}
		// }

		// public function update($user,$idUser){
		// 	try{
		// 		$ConexaoDB = new $ConexaoDB();
		// 		$conexao = $ConexaoDB->abreConexao();
		// 		$createQuery = $conexao->prepare("UPDATE FROM deysedecor.user 
		// 									SET nome = :nome, nascimento = :nascimento, email = :email
		// 										WHERE id = :idUser");
		// 		$createQuery->bindValue(':nome',$user->getNome());
		// 		$createQuery->bindValue(':nascimento',$user->getNascimento());
		// 		$createQuery->bindValue(':email',$user->getEmail());
		// 		$createQuery->bindValue(':idUser',idUser);

		// 		$createQuery->execute();
		// 		$ConexaoDB->fechaConexao();

		// 	}catch(Exception $e){
		// 		echo "Erro ao atualizar".$e->getMessage();
		// 	}
		// }

		// public function remove($idUser){
		// 	$ConexaoDB = new $ConexaoDB();
		// 	$conexao = $conexaoDB->abreConexao();
		// 	$createQuery = $conexao->prepare("DELETE FROM deysedecor.user WHERE id = :idUser");
		// 	$createQuery->bindValue(':idUser',idUser);
		// 	$createQuery->execute();
		// 	$conexaoDB->fechaConexao();
		// }

	}

?>