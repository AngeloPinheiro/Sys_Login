<?php 
	define( 'MYSQL_HOST', 'localhost' );
	define( 'MYSQL_USER', 'root' );
	define( 'MYSQL_PASSWORD', 'kyuss' );
	define( 'MYSQL_DB_NAME', 'sistema' );
	try
	{
	    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
	    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch ( PDOException $e )
	{
	    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
	}
	$PDO -> exec("set names utf8");  
?>