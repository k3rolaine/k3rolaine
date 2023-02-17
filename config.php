<?php
//////////////////////////////////////////////
// Sistema de cadastro						//
// Autor: Diego Gomes Araujo				//
// E-mail: diegogomesaraujo@hotmail.com		//
// Vers�o: 1.0								//
//////////////////////////////////////////////
date_default_timezone_set('America/Sao_Paulo');

function conectar(){

// faz conex�o com o servidor MySQL
$local_serve = "localhost"; 	 // local do servidor
$usuario_serve = "root";		 // nome do usuario
$senha_serve = "";			 	 // senha
$banco_de_dados = "datachave"; 	 // nome do banco de dados

try
{
	$conn = new PDO("mysql:host={$local_serve};dbname={$banco_de_dados}",$usuario_serve,$senha_serve, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo $e->getMessage();
}

return $conn;
}


// dados do administrador s�o de estrema importancia que sem eles
// o adminstrador n�o tera acesso as paginas de administra��o
$login_admin = "admin";  			// nome do administrador
$senha_admin = "admin";						// senha administrador
$email_admin = "admin@admin.com";  // email do administrador

?>