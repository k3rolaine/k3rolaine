<?php

	class cadastro {
		private $pdo;
		// conexao
		public function __construct($dbname, $host, $user, $pass) {
			try {
				$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
			} catch (PDOException $e) {
				echo 'Erro com banco de dados: '.$e->getMessage();
				exit();
			} catch (Exception $e) {
				echo 'Erro generico: '.$e->getMessage();
			}
		}

		public function buscarDados() {
			$res = array();
			$cmd = $this->pdo->query("SELECT * FROM cadastro ORDER BY CPF");
			$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
			return $res;
		}

		public function cadastrarPessoa($id, $CPF, $CEP, $Usuario, $Email, $Senha, $Confirmar_Senha) {
			$cmd = $this->pdo->prepare("SELECT id FROM cadastro WHERE Email = :e");
			$cmd->bindValue(':e', $Email);
			$cmd->execute();

			$select_users = mysqli_query($conn, "SELECT * FROM `cadastro` WHERE CPF = '$CPF' AND :s = '$Senha'") or die('query failed');

			if ( $cmd->rowCount() > 0 ) {
				return false;
			} else {
				$cmd = $this->pdo->prepare("INSERT INTO cadastro VALUES (DEFAULT,:cp ,:ce ,:u, :e, :s, :cs) ");
				$cmd->bindValue(':cp', $CPF);
				$cmd->bindValue(':ce', $CEP);
				$cmd->bindValue(':u', $Usuario);
                $cmd->bindValue(':e', $Email);
                $cmd->bindValue(':s', $Senha);
				$cmd->bindValue(':cs', $Confirmar_Senha);
				$cmd->execute();
				return true;
			}
		}

		public function excluirPessoa($id) {
			$cmd = $this->pdo->prepare("DELETE FROM cadastro WHERE id = :id");
			$cmd->bindValue(':id', $id);
			$cmd->execute();
		}

		public function buscarDadosPessoa($id) {
			$res = array();
			$cmd = $this->pdo->prepare("SELECT * FROM cadastro WHERE id = :id");
			$cmd->bindValue(':id', $id);
			$cmd->execute();
			$res = $cmd->fetch(PDO::FETCH_ASSOC);
			return $res;
		}

		public function atualizarDados($id, $CPF, $CEP, $Usuario, $Email, $Senha, $Confirmar_Senha) {

				$cmd = $this->pdo->prepare("UPDATE cadastro SET CPF = :cp, CEP = :ce, Usuario = :u, Email = :e, Senha = :s, Confirmar_Senha = :cs WHERE id = :id");
				$cmd->bindValue(':cp', $CPF);
				$cmd->bindValue(':ce', $CEP);
				$cmd->bindValue(':u', $Usuario);
                $cmd->bindValue(':e', $Email);
                $cmd->bindValue(':s', $Senha);
				$cmd->bindValue(':cs', $Confirmar_Senha);
				$cmd->execute();
			
		}

	}


?>