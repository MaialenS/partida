<?php
/*
 +--------------------+-------------------------------------------------------------------+
 |           FUNCION: | generar_desafio()                                                 |
 +--------------------+-------------------------------------------------------------------+
 |              Info: | genera un desaf�o aleatorio para el proceso de autenticaci�n      |
 |             +info: | funci�n replicada desde funciones.php para no requerir librer�as  |
 +--------------------+-------------------------------------------------------------------+
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