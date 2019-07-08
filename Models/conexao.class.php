<?php 
	
	abstract class Conexao{

		private $server='mysql:host=localhost;dbname=twitter';
		private $user='root';
		private $pass='';

		protected function conectar(){

			try {
				$conn = new PDO($this->server,$this->user,$this->pass);
				$conn->exec('set names utf8');
				return $conn;
				
			} catch (PDOException $e) {
				
				echo $e->getMessage();
			}
			catch (PDOException $e) {
				
				echo $e->getMessage();
			}
		
		}
		
	}
 ?>