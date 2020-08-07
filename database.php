<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="herbas_ingenieria";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
                
		public function create($nombre_fantasia,$razon_social,$web,$rut){
			$sql = "INSERT INTO `provedores` (NOMBRE_FANTASIA, RAZON_SOCIAL, WEB, RUT) VALUES ('$nombre_fantasia', '$razon_social', '$web', '$rut')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
                
		public function read(){
			$sql = "SELECT * FROM provedores";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($cod_provedor){
			$sql = "SELECT * FROM herbas_ingenieria where cod_provedor='$cod_provedor'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombre_fantasia,$razon_social,$web,$rut, $cod_provedor){
			$sql = "UPDATE herbas_ingenieria SET nombres='$nombre_fantasia', apellidos='$razon_social', telefono='$web', direccion='$rut',' WHERE cod_provedor=$cod_provedor";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($cod_provedor){
			$sql = "DELETE FROM herbas_ingenieria WHERE cod_provedor=$cod_provedor";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
	
	

?>	
