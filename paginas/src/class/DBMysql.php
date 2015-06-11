<?php

	class DBMysql {
		private $conexion;
		private $control;

		public function abrirConexion() {	
			$this->conexion = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
			$query = "use DB1949416";
			if(!isset($this->conexion)){		      	
		        die(mysql_error());
		    } else {
		    	if(!mysql_query($query, $this->conexion)) {
		    		die("No se ha seleccionado ninguna Base de Datos" . mysql_error());
		    	} else {
		    		mysql_set_charset('utf8', $this->conexion);
		    		return "Se ha seleccionado correctamente la Base de Datos";
		    	}
		    }
		}

		public function enviarConsulta($sql){
			//echo '</br> enviar consulta->'.$sql.'<-</br>' ;
		    $resul = mysql_query($sql,$this->conexion);
		    if(!$resul){ 
		      echo 'Error: ' . mysql_error();
		      exit;
		    }
		    return $resul;
		}

		public function fetch_array($resul){
		   return mysql_fetch_array($resul);
		}

		public function num_rows($resul){
		   return mysql_num_rows($resul);
		}

		public function affectedRows($resul) {
			return mysql_affected_rows($resul);
		}

		public function cerrarConexion() {
			if(isset($this->conexion)) {
				mysql_close($this->conexion);
				unset($this->conexion);
			}
		}
	}
?>