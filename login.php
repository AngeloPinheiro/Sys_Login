<?php
   
//http://blog.ultimatephp.com.br/sistema-de-login-php/
   require 'login.html';
   require 'conexao.php';
    
    try {
    	
    	if(isset($_POST["enviar"])){
            
            $login = isset($_POST["login"]) ? $_POST['login'] : '';
            $senha = isset($_POST["senha"]) ? $_POST['senha'] : '';
            
            if (empty($login) || empty($senha)) {
                echo "<center> Insira Login e Senha </center><br>";        
            }else{           
                $stmt = $PDO->prepare('SELECT login, senha FROM usuarios where login = :login AND senha = :senha');
                $stmt->execute(array(
                       ':login' => $login,
                       ':senha' => $senha
                                    )
                    );
                    $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
                    if($consulta['login'] != $login || $consulta['senha'] != $senha){
                        echo "<center> Login ou Senha incorretos!</center";
                    }else{
                        echo "<center> Bem-Vindo </center";
                    }    
            }         
    	}
	}catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}


?>

