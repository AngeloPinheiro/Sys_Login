<?php
   require 'login.html';
   require 'conexao.php';

    try {
    	
    	if(isset($_POST["enviar"])){
        $login = 'Angelo';//$_POST["login"];
        $senha = '123';//$_POST["senha"]; 
        echo $login;

        $consulta = $pdo->prepare("SELECT login FROM usuarios where login = :login");
        $consulta->bindValue(':login', 123, PDO::PARAM_INT);
        $consulta->execute();
        $login_bd = $consulta->fetch(PDO::FETCH_ASSOC);
         
       // echo "login=".$login_bd;
    	}

	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}

   
?>

