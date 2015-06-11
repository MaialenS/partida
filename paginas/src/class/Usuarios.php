<?php
	class Usuarios extends DBMysql{
		private $nombre;
		private $apellidos;
		private $pass;
		private $telefono;
		private $email;
		private $tipo;
		private $pagado;		
		private $desafio;

		public function setNombre($data) {
			$this -> nombre = $data;
		}	
		public function getNombre() {
			return $this -> nombre;
		}
		public function setApellidos($data) {
			$this -> apellidos = $data;
		}	
		public function getApellidos() {
			return $this -> apellidos;
		}
		public function setPass($data) {
			$this -> nombrado = $data;
		}	
		public function getPass() {
			return $this -> nombrado;
		}
		public function setTelefono($data) {
			$this -> telefono = $data;
		}	
		public function getTelefono() {
			return $this -> telefono;
		}
		public function setEmail($data) {
			$this -> email = $data;
		}	
		public function geEmail() {
			return $this -> email;
		}
		public function setTipo($data) {
			$this -> tipo = $data;
		}	
		public function getTipo() {
			return $this -> tipo;
		}
		public function setPagado($data) {
			$this -> pagado = $data;
		}	
		public function getPagado() {
			return $this -> pagado;
		}
		public function setDesafio($data) {
			$this -> lugar = $data;
		}	
		public function getDesafio() {
			return $this -> lugar;
		}
		
		public function nuevoUsuario($nombre, $apellidos, $pass, $telefono,	$email){
			$this->setNombre($nombre);
			$this->setApellidos($apellidos);
			$this->setPass($pass);
			$this->setTelefono($telefono);
			$this->setEmail($email);
		}
		
		public function insertarUsuario(){
			$sql = "INSERT INTO Usuarios (nombre, apellidos, email, telefono, pass) 
			VALUES (".$this->getNombre().", ".$this->getApellidos().", ".$this->getEmail().", ".$this->getTelefono().", ".$this->getPass().")";
			
			$this -> abrirConexion();
			$resul=$this->enviarConsulta($sql);
			$this -> cerrarConexion();			
		}
		
		public function pagarUsuario($email){
			$sql = 'UPDATE Usuarios SET pagado= TRUE WHERE email="'.$email.'"';
			$this -> abrirConexion();
			$resul=$this->enviarConsulta($sql);
			$this -> cerrarConexion();
			
		}
		
		public function insertarDesafio($email, $desafio){
			$sql = 'UPDATE Usuarios SET desafio="'.$desafio.'" WHERE email="'.$email.'"';
			$this -> abrirConexion();
			$resul=$this->enviarConsulta($sql);
			$this -> cerrarConexion();
			
		}
		public function verificarUsuario($email, $passDes){

			$sql = 'SELECT  email, pass, desafio FROM Usuarios WHERE email="'.$email.'"';
			$this -> abrirConexion();
			$resul=$this->enviarConsulta($sql);
			$this->fosiles = array();
			
			while($row = mysql_fetch_array($resul)) {
				$this->setDesafio($row['desafio']);
				$this->setPass($row['pass']);				
			}
			$this -> cerrarConexion();
			
			//poner que haga la comprobacion
			
			
			
			$shaPass=$this->getPass();	
			
			
			$des=$this->getDesafio();	
			$a=$shaPass;
			
			
			$shaPass=$shaPass.$this->getDesafio();
			
			
			$b=$shaPass;
			
			
			$shaPass=sha1($shaPass);
			
			$c=$shaPass;
			
		/*	$arr = array('a' => $a,
						'b' => $b,
						'c' => $c,
						'pass'=>$this->getPass(),
						'des' =>$des,
					 'email' => $email,
					 'passDes' => $passDes);
		 
		  return $arr;
		 */
			
			
			return $passDes==$shaPass;				
		}		
	 
		 
}

	
?>