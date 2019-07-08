<?php 

	 
		class Twitt extends Conexao{

			private $id,$id_usuario,$twitt,$data;

			public function __get($atributo){
				return $this->$atributo;
			}

			public function __set($atributo,$valor){
				$this->$atributo = $valor;
			}


			public function salvar($id,$twitts){
				$conn = $this->conectar();
				$this->__set('twitt',$twitts);
				$this->__set('id_usuario',$id);

				$sql = "INSERT INTO twitts(id_usuario,twitt) VALUES(:id_usuario,:twitt)";
				$stmt = $conn->prepare($sql);
				$stmt->bindValue(':id_usuario',$this->__get('id_usuario'));
				$stmt->bindValue(':twitt',$this->__get('twitt'));
				$stmt->execute();

				return $this;

			}

			public function getALL($id){
			$conn = $this->conectar();
			$this->__set('id_usuario',$id);

			$sql = " select t.id,t.id_usuario,u.nome,t.twitt,DATE_FORMAT(t.data, '%d/%m/%y %H:%i') as data
			from twitts as t 
			LEFT JOIN usuarios as u on (t.id_usuario = u.id) 
			WHERE t.id_usuario = :id_usuario
			or t.id_usuario in (select id_usuario_seguindo from usuarios_seguidores
			WHERE id_usuario =:id_usuario)
			order by t.data desc";
			//$sql= "SELECT id,id_usuario,twitt,data from twitts WHERE id_usuario = :id_usuario ";

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id_usuario',$this->__get('id_usuario'));
		     $stmt->execute();

		   return $stmt->fetchALL(\PDO::FETCH_ASSOC);
           /*foreach ($resul as $value) {
				echo "<br>";
				echo '<td>'.$value['id'].'</td>';
				echo "<br>";
				echo '<td>'.$value['id_usuario'].'</td>';
				echo "<br>";
				echo '<td>'.$value['twitt'].'</td>';
				echo "<br>";
				echo '<td>'.$value['nome'].'</td>';
				echo "</tr>";
			}*/

		}
		public function removerTwitt($id){
			$conn = $this->conectar();
			$this->__set('id',$id);

			$sql = "DELETE FROM twitts WHERE :id = id";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id',$this->__get('id'));
			$stmt->execute();
		}


		}
 ?>