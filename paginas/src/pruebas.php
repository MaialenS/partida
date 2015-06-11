<?php

		include_once('includes.php');
	
		$email = 'algo@algo.com';
		$clave = '99800b85d3383e3a2fb45eb7d0066a4879a9dad0';
		$des='LRj:Nu2E;Y4VBg';
	
		
		$b=$clave.$des;
		$c=sha1($b);

		// echo $des.' <-desafio</br>';
		// echo $email.' <-email</br>';
		// echo $clave.' <-clave</br>';
		// echo $a.' <-sha1 clave</br>';
		// echo $b.' <-concatenado</br>';
		// echo $c.'comparar</br>';
		
		echo '</br>-------------------------------</br>';
		$usuario = new Usuarios;
/*
		$res=$usuario->verificarUsuario($email, $c);
		$arr = array('paso' => $res);
		echo json_encode($arr);
	*/
	
	
	//obtener el desafio
	echo 'vamos con el desafio </br>';
		$desafio = generar_desafio();
		echo 'desafio -> '.$desafio.'</br>';
		$usuario= new Usuarios();
		
		$usuario->insertarDesafio($email, $desafio);

		$arr = array('des' => $desafio);
		echo 'ok';
		
		
		
		
		
		
		
		
	
?>