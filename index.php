<?php
   require 'login.html';
   require 'conexao.php';

    try {
        
        if(isset($_POST["enviar"])){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $stmt = $PDO->prepare('SELECT login, senha FROM usuarios where login = :login AND senha = :senha');
         $stmt->execute(array(
             ':login' => $login,
             ':senha' => $senha
         )
         );         
         $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
         if($consulta['login'] != $login && $consulta['senha'] != $senha){
            echo "<center> Login ou Senha incorretos!</center";
         }else{
            echo "<center> Bem-Vindo </center";
         }
        }
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }


?>
