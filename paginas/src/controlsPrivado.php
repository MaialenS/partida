<?php
include_once ('includes.php');
session_name('partida');
session_start();

ini_set('mbstring.internal_encoding', 'UTF-8');

if ($_SESSION['sesion_iniciada'] != true) {
	//mirar si esta haciendo login o solo carga la pagina
	if (isset($_POST["desafio"])) {
		if (isset($_POST["e"])){
			$email = $_POST["e"];
			//obtener el desafio
		
			 $desafio = generar_desafio();
			 $usuario= new Usuarios();
			 $usuario->insertarDesafio($email, $desafio);

		 	$arr = array('des' => $desafio);
			echo json_encode($arr);
			
		}else{
			$arr = array('des' => 'SIN EMAIL');
			echo json_encode($arr);
			
		}			
		

	} elseif (isset($_POST["login"])) {
		
		
		$email = $_POST["e"];
		$clave = $_POST["cc"];
		$usuario = new Usuarios;

		$res=$usuario->verificarUsuario($email, $clave);
		// $arr = array('paso' => $res,
					 // 'email' => $email,
					 // 'clave' => $clave);
		//$_SESSION['sesion_iniciada'] =$res;
		
		$arr = array('paso' => $res);
		echo json_encode($res);
			

	} else {
		//redireccionarPagina('panel');
		
		
		
		$arr = array('des' => 'panel');
		echo json_encode($arr);
	}
}//fin de sesion NO iniciada

/*
function redireccionarPagina($pagina) {
	$_SESSION['pagina'] = $pagina;
	header("Location: ../privado.php");
}
 
 */


 
 
 function generar_desafio() {
	mt_srand((double)microtime() * 1000000);
	$longitud = mt_rand(5, 15);
	$chars = '234abcR%STUd1$efABCgklVXYm&nDEF-G57896pthi_juvwxW:yzHqr;sIJ*KL+MNPQZ';
	mt_srand((double)microtime() * 1000000);
	$i = 0;
	$pass = "";
	while ($i != $longitud) {
		$rand = mt_rand() % strlen($chars);
		$tmp = $chars[$rand];
		$pass = $pass . $tmp;
		$chars = str_replace($tmp, "", $chars);
		$i++;
	}
	return strrev($pass);
}
 
 
?>