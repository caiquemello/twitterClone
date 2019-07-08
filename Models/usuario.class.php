<?php 

	class Usuario extends Conexao{

		private $id,$nome,$email,$senha;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo,$valor){
			$this->$atributo = $valor;
		}

		public function salva($nome,$email,$senha){
			$conn = $this->conectar();
			$this->__set('nome',$nome);
			$this->__set('email',$email);
			$this->__set('senha',md5($senha));

			$sql = 'INSERT INTO usuarios(nome,email,senha) VALUES(:nome,:email,:senha)';
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':nome',$this->__get('nome'));
			$stmt->bindValue(':email',$this->__get('email'));
			$stmt->bindValue(':senha',$this->__get('senha'));
			$stmt->execute();
			return $this;
		}

		public function validaCadastro($nome,$email,$senha){
			$this->__set('nome',$nome);
			$this->__set('email',$email);
			$this->__set('senha',$senha);
			$valido = true;

			if(strlen($this->__get('nome'))<3){
			$valido = false;

			}
			if(strlen($this->__get('email'))<3){
			 $valido = false;

			}
			if(strlen($this->__get('senha'))<3){
			 $valido = false;

			}
			return $valido;
		}

			public function buscaUsauarioPorNome($email){
			$conn = $this->conectar();
			$this->__set('email',$email);

			$sql = "SELECT nome,email FROM usuarios WHERE email = :email";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':email',$this->__get('email'));
			$stmt->execute();
			
			return $stmt->fetchALL(\PDO::FETCH_ASSOC);

		}

		public function validarUsuario($email,$senha){
			$conn = $this->conectar();

			$this->__set('email',$email);
			$this->__set('senha',$senha);

			$sql = "SELECT id,nome,email FROM usuarios WHERE email = :email AND senha = :senha ";
			$stmt= $conn->prepare($sql);
			$stmt->bindValue(':email',$this->__get('email'));
			$stmt->bindValue(':senha',$this->__get('senha'));
			$stmt->execute();

			$usuarios = $stmt->fetch(\PDO::FETCH_ASSOC);

			if($usuarios['id'] != '' && $usuarios['nome'] != ''){
				$this->__set('id',$usuarios['id']);
				$this->__set('nome',$usuarios['nome']);
			}
			return $this;
			
		}

		public function getALL($pequisar){
			$conn = $this->conectar();
			$this->__set('nome',$pequisar);

			$sql = "select u.id,u.nome,u.email,
			(select count(*)
			FROM
			  usuarios_seguidores as us
			   WHERE
			    us.id_usuario = :id_usuario and us.id_usuario_seguindo = u.id
			)as seguindo_sn
			  FROM 
			   usuarios as u
			   WHERE 
			u.nome like :nome 
			AND u.id != :id_usuario";

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':nome','%'.$this->__get('nome').'%');
			$stmt->bindValue(':id_usuario',$this->__get('id'));
			$stmt->execute(); 

			return $stmt->fetchALL(\PDO::FETCH_ASSOC);
		}


		public function seguirUsuario($id_usuario_seguindo){
			 $conn = $this->conectar();

			 $sql = "INSERT into usuarios_seguidores(id_usuario,id_usuario_seguindo) VALUES(:id_usuario,:id_usuario_seguindo)";
			 $stmt = $conn->prepare($sql);
			 $stmt->bindValue(':id_usuario',$this->__get('id'));
			 $stmt->bindValue(':id_usuario_seguindo',$id_usuario_seguindo);
			 $stmt->execute();
		}

		public function deixarSeguir($id_usuario_seguindo){
			$conn = $this->conectar();
			$sql = "DELETE FROM usuarios_seguidores WHERE id_usuario = :id_usuario AND id_usuario_seguindo =:id_usuario_seguindo";
			 $stmt = $conn->prepare($sql);
			 $stmt->bindValue(':id_usuario',$this->__get('id'));
			 $stmt->bindValue(':id_usuario_seguindo',$id_usuario_seguindo);
			 $stmt->execute();

		}

		public function totalTwitte($id){
			$conn = $this->conectar();
			$this->__set('id',$id);

			$sql = "select count(*) twitt FROM twitts WHERE id_usuario = :id_usuario";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id_usuario',$this->__get('id'));
			$stmt->execute();

		
			return$stmt->fetch(\PDO::FETCH_ASSOC);
		}


		public function totalSeguindo(){
			$conn = $this->conectar();

			$sql = "SELECT count(*) as total_Seguindo FROM usuarios_seguidores WHERE id_usuario = :id_usuario";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id_usuario',$this->__get('id'));
			$stmt->execute();

			return $stmt->fetch(\PDO::FETCH_ASSOC);
		}

		public function totalSeguidores(){
			$conn = $this->conectar();

			$sql = "SELECT count(*) as total_seguidores FROM usuarios_seguidores WHERE id_usuario_seguindo = :id_usuario";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id_usuario',$this->__get('id'));
			$stmt->execute();

			return $stmt->fetch(\PDO::FETCH_ASSOC);
		}







	}
 ?>